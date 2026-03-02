<?php
require_once __DIR__ . "/connect.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$passport_number = $_POST['passport_number'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users 
(first_name, last_name, passport_number, phone, email, password)
VALUES 
('$first_name','$last_name','$passport_number','$phone','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "สมัครสมาชิกสำเร็จ";
}else{
    echo "Error: " . mysqli_error($conn);
}
?>