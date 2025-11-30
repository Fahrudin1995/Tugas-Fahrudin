<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data) {

    if (password_verify($password, $data['password'])) {

        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];

        // Arahkan sesuai level
        if ($data['level'] == "admin") {
            header("Location: dashboard_admin.php");
        } else {
            header("Location: dashboard_user.php");
        }
        exit();

    } else {
        echo "<script>alert('Password salah!');window.location='index.php';</script>";
    }

} else {
    echo "<script>alert('Username tidak ditemukan!');window.location='index.php';</script>";
}
// Cek CAPTCHA
if ($_POST['captcha_input'] != $_SESSION["captcha"]) {
    echo "<script>alert('CAPTCHA salah!');window.location='index.php';</script>";
    exit();
}

?>
