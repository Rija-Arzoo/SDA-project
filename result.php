<?php
// Start the session
session_start();

// Database connection settings
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'apex_school';

// Establish database connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure student_id is set in the session
if (!isset($_SESSION['student_id'])) {
    die("Student ID not set in session.");
}

$student_id = $_SESSION['student_id'];

// Fetch student information based on session data
$student_query = "
    SELECT 
        students.name AS student_name,
        classes.class_name AS class_name,
        students.roll_no AS roll_no
    FROM students
    JOIN classes ON students.class_id = classes.class_id
    WHERE students.student_id = ?";
$stmt = $conn->prepare($student_query);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
    $_SESSION['name'] = $student['student_name'];
    $_SESSION['class_name'] = $student['class_name'];
    $_SESSION['roll_no'] = $student['roll_no'];
} else {
    die("Student not found.");
}
$stmt->close();

// Fetch grades for the student
$grades_query = "
    SELECT 
        subjects.subject_name AS subject,
        grades.grade AS grade
    FROM grades
    JOIN class_subjects ON grades.class_subject_id = class_subjects.class_subject_id
    JOIN subjects ON class_subjects.subject_id = subjects.subject_id
    WHERE grades.student_id = ?";
$stmt = $conn->prepare($grades_query);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$grades_result = $stmt->get_result();

// Prepare grades data
$grades = [];
while ($row = $grades_result->fetch_assoc()) {
    $grades[] = $row;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Card</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        /* Styles from the provided code */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .result-card {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        .result-card h1 {
            color: #05284c;
            margin-bottom: 10px;
            font-family: 'Great Vibes', cursive;
        }
        .result-card h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .student-info p {
            margin: 5px 0;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        thead {
            background-color: #05284c;
            color: #fff;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 20px;
            text-align: left;
        }
        .footer p {
            color: #555;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="result-card">
        <h1>Apex Excellence School</h1>
        <h2>Student Result Card</h2>
        <div class="student-info">
            <?php
            echo "<p><strong>Name:</strong> " . $_SESSION['name'] . "</p>";
            echo "<p><strong>Class:</strong> " . $_SESSION['class_name'] . "</p>";
            echo "<p><strong>Roll No:</strong> " . $_SESSION['roll_no'] . "</p>";
            ?>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($grades as $grade) {
                    echo "<tr>";
                    echo "<td>" . $grade['subject'] . "</td>";
                    echo "<td>" . $grade['grade'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="footer">
            <p><strong>Date:</strong> <?php echo date("d-m-Y"); ?></p>
            <p><strong>Principal's Signature:</strong> ____________________</p>
        </div>
    </div>
</body>
</html>
