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

// Fetch grades for students taught by the logged-in teacher
$grades_query = "
    SELECT 
        students.student_id, 
        students.name AS student_name, 
        classes.class_name,
        subjects.subject_name, 
        grades.grade,
        grades.grade_id
    FROM grades
    JOIN students ON grades.student_id = students.student_id
    JOIN class_subjects ON grades.class_subject_id = class_subjects.class_subject_id
    JOIN subjects ON class_subjects.subject_id = subjects.subject_id
    JOIN classes ON class_subjects.class_id = classes.class_id
    JOIN teacher_classes ON classes.class_id = teacher_classes.class_id AND teacher_classes.subject_id = subjects.subject_id
    WHERE teacher_classes.teacher_id = ?
    GROUP BY students.student_id, subjects.subject_id
    ORDER BY classes.class_name, students.student_id
";
$stmt = $conn->prepare($grades_query);
$stmt->bind_param("i", $teacher_id);
$stmt->execute();
$result = $stmt->get_result();

$grades = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $grades[] = $row;
    }
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradebook</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 70%;
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #1a446e;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 16px;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #1a446e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        .grade-input {
            width: 80px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .grade-input:focus {
            border-color: #1a446e;
            outline: none;
        }

        .btn {
            display: block;
            width: 200px;
            padding: 10px 20px;
            margin: 30px auto 0;
            font-size: 16px;
            color: #fff;
            background-color: #1a446e;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn:active {
            background-color: #004494;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gradebook</h1>
        <form method="POST" action="update_grade.php">
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grades as $grade): ?>
                        <tr>
                            <td><?= htmlspecialchars($grade['student_id']); ?></td>
                            <td><?= htmlspecialchars($grade['student_name']); ?></td>
                            <td><?= htmlspecialchars($grade['class_name']); ?></td>
                            <td><?= htmlspecialchars($grade['subject_name']); ?></td>
                            <td><input type="text" name="grades[<?= $grade['grade_id']; ?>]" value="<?= htmlspecialchars($grade['grade']); ?>" class="grade-input"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn">Update Grades</button>
        </form>
    </div>
</body>
</html>
