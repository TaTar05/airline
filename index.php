<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Airline Reservation</title>

<link rel="icon" type="image/png" href="favicon/air.png">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    background: linear-gradient(rgba(48, 40, 40, 0.6), rgba(0,0,0,0.6)), url("bg/airport.gif") center/cover no-repeat;
    height:100vh;
    color:white;
}

.navbar-custom{
    background: transparent;
    padding:20px;
}

.hero-section{
    display:flex;
    justify-content:center;
    align-items:center;
    height:80vh;
    flex-direction:column;
    text-align:center;
}

.search-box{
    background:white;
    padding:25px;
    border-radius:15px;
    width:70%;
    color:black;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.btn-search{
    background:#2563eb;
    color:white;
}
</style>
</head>
<body>

<!-- 🔵 Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold fs-4" href="#">Airline System</a>

    <div class="ms-auto">
        <?php if(isset($_SESSION['user'])){ ?>
            <span class="me-3">สวัสดี, <?php echo $_SESSION['user']; ?></span>
            <a href="logout.php" class="btn btn-light">ออกจากระบบ</a>
        <?php } else { ?>
            <a href="login.php" class="btn btn-outline-light me-2">เข้าสู่ระบบ</a>
            <a href="register.php" class="btn btn-light">ลงทะเบียน</a>
        <?php } ?>
    </div>
  </div>
</nav>

<!-- 🔵 Hero Section -->
<div class="hero-section">

    <h1 class="mb-4">จองตั๋วเครื่องบิน</h1>

    <div class="search-box">
<form action="search_flight.php" method="GET">
<div class="row g-3">

<?php
$airport1 = mysqli_query($conn,"SELECT * FROM airport");
?>

<!-- ต้นทาง -->
<div class="col-md-4">
<label>ต้นทาง</label>
<select name="from" class="form-control" required>
<option value="">-- เลือกสนามบินต้นทาง --</option>
<?php while($row = mysqli_fetch_assoc($airport1)){ ?>
<option value="<?php echo $row['airport_id']; ?>">
<?php echo $row['airport_name']; ?>
</option>
<?php } ?>
</select>
</div>

<?php
$airport2 = mysqli_query($conn,"SELECT * FROM airport");
?>

<!-- ปลายทาง -->
<div class="col-md-4">
<label>ปลายทาง</label>
<select name="to" class="form-control" required>
<option value="">-- เลือกสนามบินปลายทาง --</option>
<?php while($row = mysqli_fetch_assoc($airport2)){ ?>
<option value="<?php echo $row['airport_id']; ?>">
<?php echo $row['airport_name']; ?>
</option>
<?php } ?>
</select>
</div>

<!-- วันที่ -->
<div class="col-md-4">
<label>วันที่เดินทาง</label>
<input type="date" name="date" class="form-control" required>
</div>

<div class="col-12 mt-3">
<button class="btn btn-primary w-100">
ค้นหาเที่ยวบิน
</button>
</div>

</div>
</form>
</div>

</div>

</body>
</html>