<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login dengan CAPTCHA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-4 mx-auto">
        <div class="card shadow">
            <div class="card-header text-center"><strong>Login</strong></div>
            <div class="card-body">
                <form action="login_proses.php" method="POST">
                    
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control mb-2" required>

                    <label>Password:</label>
                    <input type="password" name="password" class="form-control mb-2" required>

                    <label>Masukkan CAPTCHA:</label>
                    <div class="d-flex mb-2">
                        <img src="captcha.php" alt="CAPTCHA" class="border">
                        <button type="button" onclick="this.previousElementSibling.src='captcha.php?'+Math.random()" 
                            class="btn btn-secondary btn-sm ms-2">Refresh</button>
                    </div>

                    <input type="text" name="captcha" class="form-control mb-3" placeholder="Tulis kode di gambar" required>

                    <button class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
