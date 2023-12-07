<?php
echo("hello");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a database connection (replace these variables with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "learn";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $userName = isset($_POST['session']['name']) ? $_POST['session']['name'] : null;
    $userPassword = isset($_POST['session']['password']) ? $_POST['session']['password'] : null;

    // Validate inputs
    if (empty($userName) || empty($userPassword)) {
        $_SESSION['error'] = "يجب إدخال اسم المستخدم وكلمة السر";
        echo "يجب إدخال اسم المستخدم وكلمة السر";
        header("Location: signin.php");
        exit();
    }

    // Validate user credentials
    $sql = "SELECT * FROM users WHERE username = '$userName' and password = '$userPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            echo 'ok login';
            header("Location: index.php");
            exit();
        
    }

    // Invalid credentials
    $_SESSION['error'] = "اسم المستخدم أو كلمة السر غير صحيحة";
    header("Location: signin.php");
    exit();
}
?>
