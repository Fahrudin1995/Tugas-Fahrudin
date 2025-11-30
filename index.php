<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card shadow p-4" style="width: 350px;">

        <h3 class="text-center mb-4">Login</h3>
        <p class="text-center mt-3">
    Belum punya akun? <a href="register.php">Daftar di sini</a>
</p>

        <form action="proses_login.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <img src="captcha.php" id="captchaImage" class="mt-2" style="border:1px solid #ddd;">

<button type="button" class="btn btn-sm btn-secondary mt-2"
        onclick="document.getElementById('captchaImage').src='captcha.php?'+Math.random();">
    Refresh CAPTCHA
</button>

            <button type="submit" class="btn btn-primary w-100">Login</button>

        </form>

    </div>
</div>

</body>
</html>
