<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];
$input_captcha = $_POST['captcha'];

// Validasi CAPTCHA
if ($input_captcha !== $_SESSION['captcha']) {
    die("<script>alert('CAPTCHA salah!'); window.location='login.php';</script>");
}

// Ambil data user
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    if ($data['level'] == 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: user_dashboard.php");
    }

} else {
    echo "<script>alert('Login gagal!'); window.location='login.php';</script>";
}
?>
