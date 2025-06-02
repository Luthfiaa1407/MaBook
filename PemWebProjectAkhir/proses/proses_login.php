<?php
session_start();
include "../database/db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = $conn->query("SELECT * FROM users WHERE email='$email'");

if ($query->num_rows === 1) {
    $user = $query->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];

        echo "<script>
            alert('Login berhasil, selamat datang {$user['nama']}!');
            window.location.href = '../../dashboard.php';
        </script>";
    } else {
        header("Location: ../view/login.php?pesan=gagal");
    }
} else {
    header("Location: ../view/login.php?pesan=gagal");
}
?>

