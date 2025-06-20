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
  <title>Kebijakan Hak Cipta | Mabook</title>

  <!-- Font & Tailwind -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="src/output.css" />
  <style>
    /*—– Gulungan Kertas Vintage —–*/
    .scroll-paper{
      background-image:url('https://www.transparenttextures.com/patterns/old-paper.png');
      background-color:#f5e7d0;
      border:15px solid transparent;
      border-image:url('https://www.transparenttextures.com/patterns/wood-pattern.png') 30 round;
      padding:30px;margin:80px auto 40px;max-width:900px;
      box-shadow:0 0 20px rgba(0,0,0,.5);color:#3a3226;
      font-family:'Times New Roman',serif;line-height:1.7
    }
    .scroll-paper h1{
      font-family:'UnifrakturMaguntia',cursive;font-size:2.5rem;
      color:#5a3a22;text-align:center;margin-bottom:1rem;
      text-shadow:2px 2px 4px rgba(0,0,0,.3)
    }
    .scroll-paper h2{font-size:1.5rem;color:#5a3a22;margin-top:1.5rem}
    .scroll-paper p{margin-top:.75rem}
    @media(max-width:640px){.scroll-paper{padding:20px}}
  </style>
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/wood-pattern.png')] bg-[#2a1e10] font-crimson">

  <?php require_once(__DIR__ . '/include/header.php'); ?>

  <main class="scroll-paper">
    <h1>Kebijakan Hak Cipta</h1>

    <p>
      Kebijakan ini menjelaskan perlindungan <strong>Hak Atas Kekayaan Intelektual (HAKI)</strong> dan ketentuan hak cipta yang berlaku bagi seluruh konten di platform <strong>Mabook</strong>.
      Kami berpedoman pada Undang‑Undang Nomor 28 Tahun 2014 tentang Hak Cipta serta peraturan HAKI lain di Indonesia.
    </p>

    <h2>1. Kepemilikan Konten</h2>
    <p>
      Seluruh e‑book, ilustrasi, metadata, dan aset digital lain di Mabook dilindungi hukum hak cipta. Hak cipta dapat dimiliki oleh:  
      <ul class="list-disc list-inside mt-2">
        <li>Penulis atau penerbit asal</li>
        <li>Mabook (untuk konten internal)</li>
      </ul>
      Pengguna dilarang memperbanyak, mendistribusikan, atau mengadaptasi konten tanpa izin tertulis dari pemegang hak.
    </p>

    <h2>2. Lisensi Pengguna</h2>
    <p>
      Mabook memberikan lisensi non‑eksklusif, tidak dapat dipindah‐tangankan, dan terbatas kepada pengguna untuk <em>membaca</em> konten di perangkat pribadi.
      Lisensi ini tidak mencakup hak untuk menjual atau menyebarluaskan ulang konten.
    </p>

    <h2>3. Pelaporan Pelanggaran Hak Cipta</h2>
    <p>
      Jika Anda adalah pemilik hak cipta atau kuasanya dan meyakini ada materi di Mabook yang melanggar hak Anda, kirim pemberitahuan tertulis berisi:
      <ol class="list-decimal list-inside mt-2">
        <li>Identitas pemilik/kuasa hak cipta</li>
        <li>Judul dan URL konten yang diduga melanggar</li>
        <li>Bukti kepemilikan (sertifikat HAKI, ISBN, kontrak penerbitan, dsb.)</li>
        <li>Pernyataan kebenaran klaim dan tanda tangan elektronik</li>
      </ol>
      Kirimkan ke email: <a href="mailto:haki@mabook.com" class="underline">haki@mabook.com</a>.  
      Kami akan meninjau dan menanggapi dalam 7 hari kerja.
    </p>

    <h2>4. Tindak Lanjut</h2>
    <p>
      Apabila klaim valid, kami dapat:
      <ul class="list-disc list-inside mt-2">
        <li>Menghapus sementara atau permanen konten yang melanggar</li>
        <li>Menangguhkan akun pelanggar berulang</li>
        <li>Menyampaikan kontra‑notifikasi jika diperlukan</li>
      </ul>
    </p>

    <h2>5. Kontra‑Notifikasi</h2>
    <p>
      Pengguna yang kontennya dihapus dapat mengajukan kontra‑notifikasi beserta bukti kepemilikan atau lisensi.  
      Mabook akan meninjau kembali dalam 10 hari kerja.
    </p>

    <h2>6. Pembaruan Kebijakan</h2>
    <p>
      Kebijakan ini dapat diperbarui sewaktu‑waktu untuk menyesuaikan regulasi HAKI terbaru. Perubahan besar akan diumumkan di halaman beranda atau via email pengguna.
    </p>

    <p class="mt-6 italic text-sm">Terakhir diperbarui: <?= date('d F Y') ?></p>
  </main>

  <?php require_once(__DIR__ . '/include/footer.php'); ?>

</body>
</html>
