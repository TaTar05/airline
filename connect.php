<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";   // ชื่อฐานข้อมูลของคุณ

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>