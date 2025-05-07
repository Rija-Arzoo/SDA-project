<?php
include_once 'login1.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher LMS Dashboard</title>
    <style>
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

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 30px;
        }

        .welcome-message h2 {
            margin: 0;
            color: #1a446e;
            font-size: 2em;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .grid-item {
            background-color: #e8e9eb;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .grid-item:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .grid-item h3 {
            margin: 0;
            font-size: 1.5em;
            color: #1a446e;
            transition: color 0.3s ease;
        }

        .grid-item p {
            margin-top: 10px;
            font-size: 1em;
            color: #555;
        }

        .grid-item:hover h3 {
            color: #d42727;
        }
    </style>
</head>
<body>
    <?php include_once 'header.php';?>
    <div class="container">
        <div class="welcome-message">
        <?php 
            echo "<h2>Welcome ". $_SESSION['name'] ."</h2>";
            ?>
        </div>

        <div class="grid-container">
            <div class="grid-item" onclick="location.href='teacher-course-management.html'">
                <h3>Course Management</h3>
                <p>Manage your courses and course materials.</p>
            </div>

            <div class="grid-item" onclick="location.href='teacher-assessment-tools.html'">
                <h3>Assessment Tools</h3>
                <p>Access and create assessments for your students.</p>
            </div>

            <div class="grid-item" onclick="location.href='grade_book.php'">
                <h3>Grade Book</h3>
                <p>Grade student assignments and track their progress.</p>
            </div>

            <div class="grid-item" onclick="location.href='teacher-communication-tools.html'">
                <h3>Communication Tools</h3>
                <p>Communicate with your students and their parents.</p>
            </div>

            <div class="grid-item" onclick="location.href='teacher-content-authoring.html'">
                <h3>Content Authoring</h3>
                <p>Create and manage your teaching content.</p>
            </div>

            <div class="grid-item" onclick="location.href='teacher-reporting-analytics.html'">
                <h3>Reporting and Analytics</h3>
                <p>Analyze student performance and generate reports.</p>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php';?>
</body>
</html>
