<?php
include "connect.php";

$from = $_GET['from'];
$to   = $_GET['to'];
$date = $_GET['date'];

$sql = "SELECT f.*, 
        a1.airport_name AS from_name,
        a2.airport_name AS to_name
        FROM flight f
        JOIN airport a1 ON f.departure_airport = a1.airport_id
        JOIN airport a2 ON f.arrival_airport = a2.airport_id
        WHERE f.departure_airport = '$from'
        AND f.arrival_airport = '$to'
        AND DATE(f.departure_time) = '$date'
        ORDER BY f.departure_time ASC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>ผลการค้นหาเที่ยวบิน</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg,#1e3c72,#2a5298); min-height:100vh;">

<div class="container py-5">

    <div class="text-center text-white mb-5">
        <h2 class="fw-bold">ผลการค้นหาเที่ยวบิน</h2>
        <p>เลือกเที่ยวบินที่คุณต้องการจอง</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <?php
            if(mysqli_num_rows($result) == 0){
                echo "<div class='alert alert-danger text-center'>
                        ไม่มีเที่ยวบินในวันที่เลือก
                      </div>";
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
            ?>

            <div class="card shadow-lg border-0 mb-4 rounded-4">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="fw-bold mb-2">
                            เที่ยวบิน <?php echo $row['flight_number']; ?>
                        </h5>

                        <div class="fs-5">
                            <strong><?php echo $row['from_name']; ?></strong>
                            <span class="mx-2">✈</span>
                            <strong><?php echo $row['to_name']; ?></strong>
                        </div>

                        <div class="text-muted mt-2">
                            เวลาออกเดินทาง:
                            <?php echo date("d M Y H:i", strtotime($row['departure_time'])); ?>
                        </div>
                    </div>

                    <div class="text-end">
                        <h3 class="text-primary fw-bold mb-3">
                            <?php echo number_format(1500); ?> บาท
                        </h3>

                        <a href="booking.php?flight_id=<?php echo $row['flight_id']; ?>"
                           class="btn btn-success px-4 rounded-pill">
                           จองตั๋ว
                        </a>
                    </div>

                </div>
            </div>

            <?php
                }
            }
            ?>

            <div class="text-center mt-4">
                <a href="index.php" class="btn btn-light rounded-pill px-4">
                    ← กลับหน้าค้นหา
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>