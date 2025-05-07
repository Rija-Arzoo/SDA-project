<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apex_school";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = ""; // Initialize the error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type = $_POST['user_type'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // Use parameterized queries to prevent SQL injection
    if ($user_type == 'student') {
        $sql = "SELECT * FROM students WHERE user_id = ? AND password = ?";
    } elseif ($user_type == 'teacher') {
        $sql = "SELECT * FROM teachers WHERE user_id = ? AND password = ?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user_id, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_type'] = $user_type;
        $_SESSION['name'] = $row['name'];
        if($user_type == 'student')
        {
        $_SESSION['student_id']=$row['student_id'];
        }
        if($user_type == 'teacher')
        {
        $_SESSION['teacher_id']=$row['teacher_id'];
        }
        if ($user_type == 'student') {
            header("Location: std_LMS.php");
        } elseif ($user_type == 'teacher') {
            header("Location: teacher_LMS.php");
        }
        exit;
    } else {
        $error = "Invalid ID or Password";
    }

    $stmt->close();
}

$conn->close();
?>
<?php
    if (!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>
