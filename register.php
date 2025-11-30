<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card shadow p-4" style="width: 380px;">

        <h3 class="text-center mb-3">Register Akun</h3>

        <form action="proses_register.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Level User</label>
                <select name="level" class="form-control" required>
                    <option value="user">User</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100">Daftar</button>

            <p class="text-center mt-3">
                Sudah punya akun? <a href="index.php">Login di sini</a>
            </p>

        </form>

    </div>
</div>

</body>
</html>
