<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Login - Airline Reservation System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
    body {
        margin: 0;
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("bg/airport.gif") center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', sans-serif;
    }

    .login-card {
        width: 400px;
        padding: 40px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0,0,0,0.3);
        color: white;
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

    .btn-login {
        background: #0d6efd;
        border: none;
        transition: 0.3s;
    }

    .btn-login:hover {
        background: #0b5ed7;
        transform: scale(1.05);
    }

    .btn-register {
        background: transparent;
        border: 1px solid white;
        color: white;
        transition: 0.3s;
    }

    .btn-register:hover {
        background: white;
        color: black;
        transform: scale(1.05);
    }

    .airplane-icon {
        font-size: 50px;
    }
</style>
</head>

<body>

<div class="login-card text-center">

    <div class="airplane-icon">✈️</div>
    <h2 class="mb-4">Airline Login</h2>

    <form action="check_login.php" method="POST">

        <div class="mb-3 text-start">
            <label class="form-label">Username</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder=" Password" required>
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-login btn-lg text-white">
                เข้าสู่ระบบ
            </button>
        </div>

    </form>

    <!-- ปุ่มไปหน้า Register -->
    <div class="d-grid mt-3">
        <a href="register.php" class="btn btn-register btn-lg">
            สมัครสมาชิก 
        </a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>