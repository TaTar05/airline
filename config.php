<?php
$host = "localhost";
$user = "root";
$pass = "";
$airline = "airline";

// สร้างการเชื่อมต่อ
$conn = mysqli_connect($host, $user, $pass, $airline);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . mysqli_connect_error());
}

// ตั้งค่า charset เป็น utf8
mysqli_set_charset($conn, "utf8");

// echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
?>
