<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Excellence School Login</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px); /* Adjusted for header space */
            width: 100%;
            margin-bottom: 20px; /* Space between login and footer */
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Added shadow */
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #05284c;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            background-color: #1a446e;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #3d6c9e;
        }

    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="login1.php" method="POST">
                <div class="input-group">
                    <label for="role">I am a:</label>
                    <select id="role" name="user_type" required>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" name="user_id" placeholder="Enter your username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
    </body>
</html>
