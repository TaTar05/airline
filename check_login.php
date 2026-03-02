<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit();
}

$email = $_POST['email'];   // ฟอร์มคุณใช้ name="username"
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE email='$email' 
        AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    $_SESSION['email'] = $email;
    header("Location: index.php");
    exit();
} else {
    echo "Email หรือ Password ไม่ถูกต้อง";
}
?>