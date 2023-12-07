<?php
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
// Retrieve form data
$userName = isset($_POST['user']['name']) ? $_POST['user']['name'] : null;
$userEmail = isset($_POST['user']['email']) ? $_POST['user']['email'] : null;
$userPassword = isset($_POST['user']['password']) ? $_POST['user']['password'] : null;

// Validate inputs
if (empty($userName) || empty($userEmail) || empty($userPassword)) {
    echo "يجب إدخال جميع الحقول";
    echo '<a style="margin: 8px;" href="signup.php" class="ctn">الرجوع إلى الصفحة السابقة</a>';
    $conn->close();
    exit();
}

$sql = "INSERT INTO users (username, email,password) VALUES ('$userName', '$userEmail','$userPassword')";
if ($conn->query($sql) === TRUE) {
    echo "تم التسجيل بنجاح";
    echo '<a style="margin: 8px;" href="index.php" class="ctn">الصفحة الرئيسية</a>';
} else {
    echo "خطا: " . $sql . "<br>" . $conn->error;
    echo '<a style="margin: 8px;" href="signup.php" class="ctn"> اعادة التسجيل</a>';

}
$conn->close();

exit();
?>
