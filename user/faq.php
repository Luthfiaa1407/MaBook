<?php
// Konfigurasi dan helper
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../functions/helper.php');
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ | Mabook</title>

  <!-- FontAwesome & Tailwind -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="../src/output.css" />
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B]">

  <?php require_once(__DIR__ . '/../include/header.php'); ?>

  <div class="w-11/12 max-w-[1200px] mx-auto mt-12">
    <section id="faq" class="py-12">
      <h1 class="text-4xl font-unifraktur text-mabook-light text-center mb-10">Pertanyaan Umum (FAQ)</h1>

      <div class="space-y-4 font-crimson" id="accordionFAQ">

        <!-- FAQ Item -->
        <div class="border border-mabook-midtone/25 rounded-xl bg-mabook-primary overflow-hidden">
          <button class="w-full flex items-center justify-between px-6 py-4 text-lg font-semibold text-mabook-midtone hover:bg-mabook-midtone/75 hover:text-white transition" data-accordion-target="faq1">
            <span>Apa itu Mabook?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div id="faq1" class="hidden px-6 pb-6 text-white">
            Mabook adalah perpustakaan digital yang menyediakan koleksi e‑book klasik hingga kontemporer serta fitur pengelolaan bacaan pribadi.
          </div>
        </div>

        <div class="border border-mabook-midtone/25 rounded-xl bg-mabook-primary overflow-hidden">
          <button class="w-full flex items-center justify-between px-6 py-4 text-lg font-semibold text-mabook-midtone hover:bg-mabook-midtone/75 hover:text-white transition" data-accordion-target="faq2">
            <span>Bagaimana cara mendaftar sebagai anggota?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div id="faq2" class="hidden px-6 pb-6 text-white">
            Klik tombol <strong>Daftar</strong> di pojok kanan atas, isi formulir, lalu verifikasi e‑mail untuk mulai menikmati koleksi kami.
          </div>
        </div>

        <div class="border border-mabook-midtone/25 rounded-xl bg-mabook-primary overflow-hidden">
          <button class="w-full flex items-center justify-between px-6 py-4 text-lg font-semibold text-mabook-midtone hover:bg-mabook-midtone/75 hover:text-white transition" data-accordion-target="faq3">
            <span>Apakah semua buku bisa diunduh?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div id="faq3" class="hidden px-6 pb-6 text-white">
            Tidak semua. Sebagian judul hanya tersedia untuk dibaca daring demi menghormati lisensi penerbit.
          </div>
        </div>

        <div class="border border-mabook-midtone/25 rounded-xl bg-mabook-primary overflow-hidden">
          <button class="w-full flex items-center justify-between px-6 py-4 text-lg font-semibold text-mabook-midtone hover:bg-mabook-midtone/75 hover:text-white transition" data-accordion-target="faq4">
            <span>Bisakah saya menyimpan buku favorit?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div id="faq4" class="hidden px-6 pb-6 text-white">
            Tentu. Gunakan fitur <em>Favoritku</em> untuk menandai, menyimpan, dan melanjutkan bacaan kapan pun.
          </div>
        </div>

        <div class="border border-mabook-midtone/25 rounded-xl bg-mabook-primary overflow-hidden">
          <button class="w-full flex items-center justify-between px-6 py-4 text-lg font-semibold text-mabook-midtone hover:bg-mabook-midtone/75 hover:text-white transition" data-accordion-target="faq5">
            <span>Apakah Mabook gratis?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div id="faq5" class="hidden px-6 pb-6 text-white">
            Ya, Mabook dapat diakses secara gratis. Kami menyediakan platform perpustakaan digital untuk mendukung literasi dan memperluas akses pembaca terhadap karya-karya penulis.
          </div>
        </div>

      </div>
    </section>
  </div>

  <?php require_once(__DIR__ . '/../include/footer.php'); ?>

  <!-- Accordion Script -->
  <script>
    document.querySelectorAll('[data-accordion-target]').forEach(btn => {
      btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-accordion-target');
        const content = document.getElementById(targetId);
        content.classList.toggle('hidden');
        btn.querySelector('i').classList.toggle('rotate-180');
      });
    });
  </script>
</body>

</html>
