<?php require_once(__DIR__ . '/config/db.php'); ?>
<?php require_once(__DIR__ . '/config/config.php'); ?>
<?php require_once(__DIR__ . '/functions/helper.php'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | Mabook</title>

    <!-- FontAwesome & Tailwind build -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="src/output.css">
    
    <!-- Google Fonts for Dark Academia aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B] text-[#E5D9C8] font-cormorant">

    <?php require_once(__DIR__ . '/include/header.php'); ?>

    <!-- ====== MAIN CONTAINER ====== -->
    <div class="w-11/12 max-w-4xl mx-auto mt-12 mb-20">

        <!-- ====== FAQ SECTION ====== -->
        <section id="faq" class="py-12">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-cinzel text-[#D4AF37] mb-4 tracking-wide">
                    Pertanyaan Umum
                </h1>
                <div class="w-24 h-1 bg-[#D4AF37] mx-auto"></div>
            </div>

            <div class="space-y-6">

                <!-- FAQ Card -->
                <div class="border border-[#3A2E24] p-6 rounded-lg bg-[#2A2118] shadow-xl hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-[#D4AF37] mb-3 flex items-center">
                        <i class="fas fa-question-circle mr-3 text-[#A68A64]"></i>
                        Apa itu Mabook?
                    </h3>
                    <p class="text-[#E5D9C8]/90 leading-relaxed">
                        Mabook adalah perpustakaan digital yang menyediakan koleksi e‑book klasik hingga kontemporer
                        serta fitur pengelolaan bacaan pribadi.
                    </p>
                </div>

                <div class="border border-[#3A2E24] p-6 rounded-lg bg-[#2A2118] shadow-xl hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-[#D4AF37] mb-3 flex items-center">
                        <i class="fas fa-user-plus mr-3 text-[#A68A64]"></i>
                        Bagaimana cara mendaftar sebagai anggota?
                    </h3>
                    <p class="text-[#E5D9C8]/90 leading-relaxed">
                        Klik tombol <span class="text-[#D4AF37] font-medium">Daftar</span> di pojok kanan atas, isi formulir, lalu verifikasi e‑mail
                        untuk mulai menikmati koleksi kami.
                    </p>
                </div>

                <div class="border border-[#3A2E24] p-6 rounded-lg bg-[#2A2118] shadow-xl hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-[#D4AF37] mb-3 flex items-center">
                        <i class="fas fa-download mr-3 text-[#A68A64]"></i>
                        Apakah semua buku bisa diunduh?
                    </h3>
                    <p class="text-[#E5D9C8]/90 leading-relaxed">
                        Tidak semua. Sebagian judul hanya tersedia untuk dibaca daring demi menghormati lisensi penerbit.
                    </p>
                </div>

                <div class="border border-[#3A2E24] p-6 rounded-lg bg-[#2A2118] shadow-xl hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-[#D4AF37] mb-3 flex items-center">
                        <i class="fas fa-bookmark mr-3 text-[#A68A64]"></i>
                        Bisakah saya menyimpan buku favorit?
                    </h3>
                    <p class="text-[#E5D9C8]/90 leading-relaxed">
                        Tentu. Gunakan fitur <span class="italic text-[#D4AF37]">Rak Buku Saya</span> untuk menandai, menyimpan, dan melanjutkan bacaan
                        kapan pun.
                    </p>
                </div>

                <div class="border border-[#3A2E24] p-6 rounded-lg bg-[#2A2118] shadow-xl hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-[#D4AF37] mb-3 flex items-center">
                        <i class="fas fa-coins mr-3 text-[#A68A64]"></i>
                        Apakah Mabook gratis?
                    </h3>
                    <p class="text-[#E5D9C8]/90 leading-relaxed">
                        Akses dasar gratis. Untuk koleksi eksklusif dan fitur lanjutan, tersedia paket premium
                        berlangganan.
                    </p>
                </div>

            </div>
        </section>
        <!-- ====== /FAQ SECTION ====== -->

    </div>
    <!-- ====== /MAIN CONTAINER ====== -->

    <?php require_once(__DIR__ . '/include/footer.php'); ?>
</body>

</html>