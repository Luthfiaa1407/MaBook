<?php
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../functions/helper.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kebijakan Privasi | Mabook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="../src/output.css" />
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

  <?php require_once(__DIR__ . '/../include/header.php'); ?>

  <main class="scroll-paper">
    <h1>Kebijakan Privasi</h1>

    <p>Kami di <strong>Mabook</strong> menghormati dan melindungi privasi pengguna kami. Dokumen ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan menjaga data pribadi Anda ketika menggunakan layanan Mabook.</p>

    <h2>1. Informasi yang Kami Kumpulkan</h2>
    <p>
      Kami dapat mengumpulkan informasi berikut:
      <ul class="list-disc list-inside mt-2">
        <li>Nama dan alamat email Anda saat mendaftar akun</li>
        <li>Data interaksi Anda dengan buku, seperti favorit, bookmark, dan komentar</li>
        <li>Alamat IP dan data perangkat untuk keamanan dan analisis</li>
      </ul>
    </p>

    <h2>2. Penggunaan Informasi</h2>
    <p>Informasi yang kami kumpulkan digunakan untuk:</p>
    <ul class="list-disc list-inside mt-2">
      <li>Memberikan layanan membaca buku digital</li>
      <li>Menyimpan preferensi dan personalisasi pengalaman Anda</li>
      <li>Menanggapi pertanyaan, laporan, atau permintaan pengguna</li>
    </ul>

    <h2>3. Perlindungan Data</h2>
    <p>
      Kami menerapkan pengamanan teknis dan administratif untuk melindungi data Anda dari akses yang tidak sah, perubahan, atau penyalahgunaan.
    </p>

    <h2>4. Berbagi Informasi</h2>
    <p>
      Mabook tidak menjual atau menyewakan data pribadi Anda kepada pihak ketiga. Kami hanya akan membagikan informasi bila diwajibkan oleh hukum atau untuk keamanan sistem.
    </p>

    <h2>5. Hak Anda</h2>
    <p>
      Anda memiliki hak untuk mengakses, memperbarui, atau menghapus informasi pribadi Anda kapan saja melalui halaman profil. Anda juga berhak menghubungi kami jika ada kekhawatiran terkait privasi.
    </p>

    <h2>6. Perubahan Kebijakan</h2>
    <p>
      Kebijakan ini dapat diperbarui sewaktu-waktu. Kami akan menginformasikan perubahan penting melalui notifikasi atau email.
    </p>

    <p class="mt-6 italic text-sm">Terakhir diperbarui: <?= date('d F Y') ?></p>
  </main>

  <?php require_once(__DIR__ . '/../include/footer.php'); ?>

</body>
</html>
