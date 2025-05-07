<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .header-primary {
            width: 100%;
            background-color: #05284c;
            color: #fff;
            padding: 20px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between; /* Ensure space between logo/title and navigation */
            align-items: center; /* Vertically center content */
            height:130px;
        }

        .header-primary .header-content {
            display: flex;
            align-items: center;
        }

        .header-primary .school-logo {
            height: 45px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .header-primary h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 2em;
            margin: 0;
            display: inline-block;
            vertical-align: middle;
            color: #fff;
        }

        nav ul {
            display: flex;
            list-style: none; /* Remove default list styling */
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            font-weight: bold;
            transition: color 0.3s;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: rgba(255, 0, 0, 1); /* Correct hover color */
        }
    </style>
</head>

<body>
    <header class="header-primary">
        <div class="header-content">
            <img src="logo.png" alt="School Logo" class="school-logo">
            <h1>Apex Excellence School</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#grades">Grades</a></li>
                <li><a href="#communication">Communication</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
