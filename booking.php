<?php
$flight_id = $_GET['flight_id'];
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Booking Success</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    background: white;
    padding: 50px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    text-align: center;
    max-width: 500px;
    width: 90%;
}

.success-icon {
    font-size: 60px;
    color: #28a745;
    margin-bottom: 20px;
}

h1 {
    margin: 10px 0;
    color: #333;
}

p {
    color: #666;
    font-size: 16px;
}

.flight-id {
    margin-top: 15px;
    font-weight: bold;
    color: #2a5298;
}

.btn {
    display: inline-block;
    margin-top: 30px;
    padding: 12px 25px;
    background: #2a5298;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s;
}

.btn:hover {
    background: #1e3c72;
}
</style>

</head>
<body>

<div class="card">
    <div class="success-icon">✔</div>
    <h1>จองตั๋วสำเร็จ 🎉</h1>
    <p>คุณได้จองตั๋วเครื่องบินเรียบร้อยแล้ว</p>
    <p>ขอให้เดินทางโดยสวัสดิภาพ ✈️</p>
    <div class="flight-id">เที่ยวบิน ID: <?php echo $flight_id; ?></div>

    <a href="index.php" class="btn">กลับหน้าหลัก</a>
</div>

</body>
</html>