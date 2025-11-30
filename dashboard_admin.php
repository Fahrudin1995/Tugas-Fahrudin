<?php
session_start();

if ($_SESSION['level'] != "admin") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard Admin</span>
        <a href="logout.php" class="btn btn-light">Logout</a>
    </div>
</nav>

<div class="container mt-4">
    <div class="alert alert-primary">
        Selamat datang Admin, <strong><?php echo $_SESSION['username']; ?></strong>!
    </div>
</div>

</body>
</html>
