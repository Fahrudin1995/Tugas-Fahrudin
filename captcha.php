<?php
session_start();

// Ukuran gambar
$width = 160;
$height = 60;

$image = imagecreatetruecolor($width, $height);

// Warna background
$bg = imagecolorallocate($image, 245, 245, 245); 
imagefilledrectangle($image, 0, 0, $width, $height, $bg);

// Buat kode CAPTCHA
$characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
$captcha_text = substr(str_shuffle($characters), 0, 5);

// Simpan ke session
$_SESSION['captcha'] = $captcha_text;

// Load font TTF
$font = __DIR__ . '/fonts/Roboto-Bold.ttf';

// Tambah garis acak (noise)
for ($i = 0; $i < 6; $i++) {
    $line_color = imagecolorallocate($image, rand(100, 150), rand(100, 150), rand(100, 150));
    imageline($image, rand(0,$width), rand(0,$height), rand(0,$width), rand(0,$height), $line_color);
}

// Tambah titik-titik noise
for ($i = 0; $i < 250; $i++) {
    $dot_color = imagecolorallocate($image, rand(150,200), rand(150,200), rand(150,200));
    imagesetpixel($image, rand(0,$width), rand(0,$height), $dot_color);
}

// Warna tulisan
$text_color = imagecolorallocate($image, rand(20,80), rand(20,80), rand(20,80));

// Tampilkan teks CAPTCHA dengan rotasi acak
imagettftext(
    $image,
    rand(24, 30),        // ukuran font
    rand(-15, 15),       // rotasi
    20,                  // posisi X
    45,                  // posisi Y
    $text_color,
    $font,
    $captcha_text
);

// Output sebagai PNG
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
