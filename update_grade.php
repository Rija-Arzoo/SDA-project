<?php
session_start();

// Database connection settings
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'apex_school';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure teacher_id is set in the session
if (!isset($_SESSION['teacher_id'])) {
    die("Teacher ID not set in session.");
}

$teacher_id = $_SESSION['teacher_id'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['grades'])) {
    $grades = $_POST['grades'];

    // Prepare the SQL statement for updating grades
    $stmt = $conn->prepare("UPDATE grades SET grade = ? WHERE grade_id = ? AND EXISTS (
        SELECT 1 FROM teacher_classes 
        JOIN class_subjects ON teacher_classes.class_id = class_subjects.class_id
        WHERE teacher_classes.teacher_id = ? AND class_subjects.subject_id = (
            SELECT class_subjects.subject_id FROM grades
            JOIN class_subjects ON grades.class_subject_id = class_subjects.class_subject_id
            WHERE grades.grade_id = ?
        )
    )");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Loop through the submitted grades and update them
    foreach ($grades as $grade_id => $grade) {
        // Bind parameters and execute statement
        $stmt->bind_param("siii", $grade, $grade_id, $teacher_id, $grade_id);
        $stmt->execute();

        if ($stmt->error) {
            echo "Execute failed: " . $stmt->error . "<br>";
        }
    }

    $stmt->close();
}

$conn->close();

// Redirect back to the gradebook page
header("Location: grade_book.php");
exit();
?>
