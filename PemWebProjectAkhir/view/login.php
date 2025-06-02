<?php 
session_start(); 
include "../database/db.php"; 

$pesan = isset($_GET['pesan']) ? $_GET['pesan'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - MaBook</title>
  <link rel="stylesheet" href="../assets/style/style.css">
  
</head>

<body class="login-page">
  <div class="container">
    <div class="right-side">
    </div>
    <div class="left-side">
      <form action="../proses/proses_login.php" method="POST" class="form-box">
        <h2><span class="brand-orange">MaBook</span></h2>

        <?php if ($pesan == "gagal") : ?>
          <div class="alert">Akun tidak tersedia!</div>
        <?php endif; ?>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Masukkan email" required>

        <label for="password">Kata Sandi</label>
        <input type="password" name="password" placeholder="Masukkan kata sandi" required>


        <button type="submit">Masuk</button>

        <p class="login-link">Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>
      </form>
    </div>
  </div>


</body>
</html>
