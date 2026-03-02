<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Register - Airline Reservation System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        margin: 0;
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                    url("bg/airport.gif") center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', sans-serif;
    }

    .register-card {
        width: 450px;
        padding: 40px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(12px);
        box-shadow: 0 8px 32px rgba(0,0,0,0.3);
        color: white;
    }

    .register-card h2 {
        font-weight: bold;
    }

    .form-control {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
    }

    .form-control::placeholder {
        color: #ddd;
    }

    .form-control:focus {
        background: rgba(255,255,255,0.3);
        color: white;
        box-shadow: none;
    }

    .btn-register {
        background: #0dcaf0;
        border: none;
        transition: 0.3s;
    }

    .btn-register:hover {
        background: #0bbcd6;
        transform: scale(1.05);
    }

    .airplane-icon {
        font-size: 45px;
    }

    .back-login {
        color: #ccc;
        text-decoration: none;
        font-size: 14px;
    }

    .back-login:hover {
        color: white;
    }
</style>
</head>

<body>

<div class="register-card text-center">

    <div class="airplane-icon">🛫</div>
    <h2 class="mb-4">สมัครสมาชิก</h2>

    <form action="save_register.php" method="POST">

        <div class="mb-3 text-start">
            <label class="form-label">ชื่อ</label>
            <input type="text" name="first_name" class="form-control" placeholder="กรอกชื่อ" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">นามสกุล</label>
            <input type="text" name="last_name" class="form-control" placeholder="กรอกนามสกุล" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">เลขพาสปอร์ต</label>
            <input type="text" name="passport_number" class="form-control" placeholder="กรอกเลขพาสปอร์ต" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">เบอร์โทร</label>
            <input type="text" name="phone" class="form-control" placeholder="กรอกเบอร์โทร" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">อีเมล</label>
            <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">รหัสผ่าน</label>
            <input type="password" name="password" class="form-control" placeholder="ตั้งรหัสผ่าน" required>
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-register btn-lg text-white">
                สมัครสมาชิก
            </button>
        </div>

    </form>

    <div class="mt-4">
        มีบัญชีแล้ว? <a href="login.php" class="back-login">เข้าสู่ระบบ</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>