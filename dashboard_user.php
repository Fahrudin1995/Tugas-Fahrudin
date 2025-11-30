<?php
session_start();

if ($_SESSION['level'] != "user") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard User</span>
        <a href="logout.php" class="btn btn-light">Logout</a>
    </div>
</nav>

<div class="container mt-4">
    <div class="alert alert-success">
        Selamat datang User, <strong><?php echo $_SESSION['username']; ?></strong>!
    </div>
</div>

</body>
</html>
