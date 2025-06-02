<?php
include "../database/db.php";

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Cek apakah email sudah terdaftar
$cek = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($cek->num_rows > 0) {
    echo "<script>alert('Email sudah digunakan!'); window.location='../view/daftar.php';</script>";
    exit;
}

$sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='../view/login.php';</script>";
} else {
    echo "Gagal menyimpan: " . $conn->error;
}
?>
