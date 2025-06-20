<?php
require_once(__DIR__.'/../config/db.php');
require_once(__DIR__.'/../config/config.php');
require_once(__DIR__.'/../functions/helper.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panduan Penggunaan | Mabook</title>

  <!-- FontAwesome & Tailwind -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="../src/output.css"/>

  <style>
    header { z-index: 50; }

    /* ======== CSS Vintage Accordion ======== */
    .vintage-scroll{
      background-image:url('https://www.transparenttextures.com/patterns/old-paper.png');
      background-color:#f5e7d0;border:1px solid #d4b483;
      box-shadow:0 4px 8px rgba(0,0,0,.2),inset 0 0 30px rgba(139,90,43,.2);
      color:#3a3226;border-radius:0 0 10px 10px;margin-top:0;
      max-height:0;overflow:hidden;
      transition:max-height .5s ease-out,padding .5s ease-out
    }
    .vintage-scroll.open{max-height:500px;padding:20px;margin-top:10px}

    .vintage-header{
      background-image:url('https://www.transparenttextures.com/patterns/old-paper.png');
      background-color:#e6d5b8;border:1px solid #d4b483;color:#5a4a3a;
      padding:15px;cursor:pointer;border-radius:5px;
      font-family:'Times New Roman',serif;position:relative;
      transition:all .3s ease
    }
    .vintage-header:hover{background-color:#d8c7a8}
    .vintage-header::after{
      content:'\f078';font-family:'Font Awesome 6 Free';font-weight:900;
      position:absolute;right:15px;top:50%;transform:translateY(-50%);
      transition:transform .3s ease
    }
    .vintage-header.open::after{transform:translateY(-50%) rotate(180deg)}

    .main-container{
      background-image:url('https://www.transparenttextures.com/patterns/old-paper.png');
      background-color:#f5e7d0;border:15px solid transparent;
      border-image:url('https://www.transparenttextures.com/patterns/wood-pattern.png') 30 round;
      padding:30px;margin:20px auto;max-width:900px;
      box-shadow:0 0 20px rgba(0,0,0,.5)
    }
    h1{
      font-family:'UnifrakturMaguntia',cursive;color:#5a3a22;
      text-shadow:2px 2px 4px rgba(0,0,0,.3);
      border-bottom:2px solid #d4b483;padding-bottom:10px;margin-bottom:30px
    }
  </style>
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/wood-pattern.png')] bg-[#2a1e10] font-crimson">

<?php require_once(__DIR__.'/../include/header.php'); ?>

<main class="w-11/12 max-w-[1200px] mx-auto pt-20 pb-12">  <!-- ruang 80 px di bawah header -->
  <div class="main-container">
    <h1 class="text-4xl text-center mb-12">Panduan Penggunaan MabooK</h1>

    <div class="space-y-4">
      <?php
      $items = [
        ['plus-circle','Tambah Koleksi Buku','Gunakan tombol "Tambah Koleksi" untuk mengunggah buku baru. Pastikan judul, penulis, dan kategori terisi.'],
        ['search','Cari Buku','Gunakan kolom pencarian di bagian atas untuk menemukan buku berdasarkan judul, penulis, atau kata kunci.'],
        ['heart','Favoritku','Klik ikon hati di halaman buku untuk menambahkannya ke daftar Favoritku.'],
        ['user-edit','Edit Profil','Buka "Profil Saya" untuk memperbarui nama, email, kata sandi, atau foto profil.'],
        ['comments','Berikan Komentar','Tulis ulasan dan baca opini pengguna lain di halaman detail buku.'],
        ['exclamation-triangle','Laporan Masalah','Laporkan kesalahan data atau konten tak pantas melalui tombol Laporan Masalah.'],
        ['bookmark','Bookmark','Simpan posisi terakhir membaca Anda dengan fitur Bookmark.'],
        ['tags','Kategori Buku','Telusuri koleksi berdasarkan kategori—fiksi, non‑fiksi, sejarah, puisi, dll.']
      ];
      foreach($items as $idx=>$it){
        [$icon,$title,$desc]=$it;
        echo "
        <div>
          <div class='vintage-header' onclick='toggleDropdown(this)'>
            <h2 class='text-2xl font-bold mb-0'><i class='fas fa-$icon mr-2'></i>$title</h2>
          </div>
          <div class='vintage-scroll'><p>$desc</p></div>
        </div>";
      }
      ?>
    </div>
  </div>
</main>

<?php require_once(__DIR__.'/../include/footer.php'); ?>

<script>
function toggleDropdown(header){
  const content = header.nextElementSibling;
  const wasOpen = header.classList.contains('open');

  // tutup semua
  document.querySelectorAll('.vintage-header').forEach(h=>{
    h.classList.remove('open');
    h.nextElementSibling.classList.remove('open');
  });

  // buka kalau sebelumnya tertutup
  if(!wasOpen){
    header.classList.add('open');
    content.classList.add('open');

    /* ==== Auto‑scroll supaya judul tak tertutup header ==== */
    const headerEl = document.querySelector('header');
    const headerHeight = headerEl ? headerEl.offsetHeight : 0;
    const rect = header.getBoundingClientRect();

    if(rect.top < headerHeight){
      // gulir sedikit ke bawah agar header tidak menutupi
      window.scrollBy({ top: rect.top - headerHeight - 10, behavior: 'smooth' });
    }
  }
}
</script>

</body>
</html>
