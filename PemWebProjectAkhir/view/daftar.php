<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar - Citrus Company</title>
  <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body class="daftar-page">
  <div class="container">
    
    <!-- BAGIAN kanan -->
    <div class="right-side"></div>
    
    <!-- BAGIAN kiri -->
    <div class="left-side">
      <form action="../proses/proses_daftar.php" method="POST" class="form-box">
        <h2><span class="brand-orange">MaBook</span></h2>

        <label for="nama">Nama Pengguna</label>
        <input type="text" name="nama" required placeholder="Masukkan nama lengkap">

        <label for="email">Email</label>
        <input type="email" name="email" required placeholder="Masukkan email">

        <label for="password">Kata Sandi</label>
        <input type="password" name="password" required placeholder="Masukkan kata sandi">

        <button type="submit" href="login.php">Daftar</button>

        <p class="login-link">Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
      </form>
    </div>
  </div>
</body>
</html>
