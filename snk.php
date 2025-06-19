<?php
require_once(__DIR__ . '/config/db.php');
require_once(__DIR__ . '/config/config.php');
require_once(__DIR__ . '/functions/helper.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Syarat & Ketentuan | Mabook</title>

  <!-- Font & Tailwind -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="src/output.css" />
  <style>
    .scroll-paper {
      background-image: url('https://www.transparenttextures.com/patterns/old-paper.png');
      background-color: #f5e7d0;
      border: 15px solid transparent;
      border-image: url('https://www.transparenttextures.com/patterns/wood-pattern.png') 30 round;
      padding: 30px;
      margin: 80px auto 40px;
      max-width: 900px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      color: #3a3226;
      font-family: 'Times New Roman', serif;
      line-height: 1.7;
    }

    .scroll-paper h1 {
      font-family: 'UnifrakturMaguntia', cursive;
      font-size: 2.5rem;
      color: #5a3a22;
      text-align: center;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .scroll-paper h2 {
      font-size: 1.5rem;
      color: #5a3a22;
      margin-top: 1.5rem;
    }

    .scroll-paper p {
      margin-top: 0.75rem;
    }

    @media (max-width: 640px) {
      .scroll-paper { padding: 20px; }
    }
  </style>
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/wood-pattern.png')] bg-[#2a1e10] font-crimson">

  <?php require_once(__DIR__ . '/include/header.php'); ?>

  <main class="scroll-paper">
    <h1>Syarat & Ketentuan Penggunaan</h1>

    <p>Dengan menggunakan platform Mabook, Anda menyetujui syarat dan ketentuan berikut. Harap baca dengan cermat sebelum menggunakan layanan kami.</p>

    <h2>1. Akun Pengguna</h2>
    <p>
      Anda bertanggung jawab untuk menjaga kerahasiaan akun dan kata sandi Anda. Mabook tidak bertanggung jawab atas penyalahgunaan akun Anda oleh pihak lain.
    </p>

    <h2>2. Penggunaan Layanan</h2>
    <p>
      Layanan Mabook disediakan untuk keperluan pribadi dan non-komersial. Anda tidak diperkenankan untuk menyalin, mendistribusikan, atau menjual konten tanpa izin tertulis.
    </p>

    <h2>3. Konten dan Hak Cipta</h2>
    <p>
      Seluruh e-book dan konten yang tersedia di Mabook dilindungi oleh hukum hak cipta. Pengguna dilarang keras untuk menduplikasi atau memodifikasi konten tanpa izin.
    </p>

    <h2>4. Larangan Penggunaan</h2>
    <p>
      Anda dilarang menggunakan Mabook untuk:
      <ul class="list-disc list-inside mt-2">
        <li>Menyebarkan konten yang melanggar hukum atau bersifat ofensif</li>
        <li>Mengganggu sistem atau keamanan layanan</li>
        <li>Melakukan scraping atau ekstraksi data tanpa izin</li>
      </ul>
    </p>

    <h2>5. Penghapusan Akun</h2>
    <p>
      Mabook berhak menonaktifkan akun pengguna yang melanggar ketentuan tanpa pemberitahuan terlebih dahulu.
    </p>

    <h2>6. Perubahan Layanan</h2>
    <p>
      Kami berhak untuk mengubah atau menghentikan sementara/permanen layanan Mabook kapan pun, dengan atau tanpa pemberitahuan.
    </p>

    <h2>7. Tanggung Jawab Terbatas</h2>
    <p>
      Mabook tidak menjamin bahwa layanan akan selalu tersedia tanpa gangguan atau bebas dari kesalahan. Kami tidak bertanggung jawab atas kerugian yang timbul akibat penggunaan platform.
    </p>

    <h2>8. Hukum yang Berlaku</h2>
    <p>
      Syarat dan ketentuan ini tunduk pada hukum yang berlaku di Indonesia.
    </p>

    <p class="mt-6 italic text-sm">Terakhir diperbarui: <?= date('d F Y') ?></p>
  </main>

  <?php require_once(__DIR__ . '/include/footer.php'); ?>

</body>
</html>
