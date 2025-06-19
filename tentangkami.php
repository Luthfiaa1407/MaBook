<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami | Mabook</title>

  <!-- Fonts & Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="src/output.css">
  <style>
    /* Style improvement */
    .team-member-card { transition: all 0.3s ease; position: relative; overflow: hidden; }
    .team-member-card::before {
      content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background-color: #D4AF37;
    }
    .team-member-card:hover {
      transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }
    .member-photo { border: 3px solid #D4AF37; transition: all 0.3s ease; }
    .team-member-card:hover .member-photo {
      transform: scale(1.05); box-shadow: 0 8px 20px rgba(212, 175, 55, 0.3);
    }
    .social-links a {
      transition: all 0.3s ease;
    }
    .social-links a:hover {
      transform: translateY(-3px);
      background-color: #D4AF37 !important;
      color: #1A120B !important;
    }
    .section-divider {
      width: 150px;
      height: 2px;
      background: linear-gradient(90deg, #D4AF37, transparent);
      margin: 2rem auto;
    }
    .mission-card {
      border-left: 4px solid #D4AF37;
      transition: all 0.3s ease;
    }
    .mission-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B] text-[#E5D9C8] font-cormorant">

  <?php require_once(__DIR__ . '/include/header.php'); ?>

  <main class="w-11/12 max-w-6xl mx-auto py-12">
    
    <!-- Hero -->
    <section class="text-center mb-20">
      <h1 class="text-5xl font-cinzel text-[#D4AF37] mb-4">Tentang Mabook</h1>
      <div class="section-divider"></div>
      <p class="text-xl max-w-3xl mx-auto leading-relaxed">
        Mabook lahir dari kecintaan kami terhadap literasi dan keinginan untuk menciptakan platform yang menghubungkan pembaca dengan dunia buku klasik dan kontemporer.
      </p>
    </section>

    <!-- Cerita Kami -->
    <section class="mb-20 bg-[#2A2118] p-8 rounded-xl border border-[#3A2E24] shadow-lg">
      <h2 class="text-3xl font-cinzel text-[#D4AF37] mb-6 text-center">Cerita Kami</h2>
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
          <p class="mb-4 leading-relaxed">
            Didirikan pada tahun 2023, Mabook dimulai sebagai proyek kecil sekelompok mahasiswa ilmu komputer yang memiliki passion di dunia literatur. Kami melihat kebutuhan akan platform digital yang tidak hanya menyediakan akses ke buku-buku, tetapi juga membangun komunitas pembaca yang aktif.
          </p>
          <p class="leading-relaxed">
            Dengan latar belakang yang beragam mulai dari teknologi hingga sastra, tim kami berkomitmen untuk menciptakan pengalaman membaca yang menyenangkan dan bermakna bagi semua pengguna.
          </p>
        </div>
        <div class="bg-[#3A2E24] p-6 rounded-lg">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
               alt="Tim Mabook"
               class="w-full h-auto rounded-lg shadow-xl">
        </div>
      </div>
    </section>

    <!-- Misi & Visi -->
    <section class="mb-20">
      <h2 class="text-3xl font-cinzel text-[#D4AF37] mb-12 text-center">Misi & Visi</h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="mission-card bg-[#2A2118] p-8 rounded-lg border border-[#3A2E24]">
          <div class="text-4xl text-[#D4AF37] mb-4"><i class="fas fa-bullseye"></i></div>
          <h3 class="text-2xl font-bold text-[#D4AF37] mb-3">Misi Kami</h3>
          <p class="leading-relaxed">
            Menyediakan platform literasi digital yang mudah diakses, dengan koleksi buku berkualitas dari berbagai genre dan periode, sambil membangun komunitas pembaca yang aktif dan saling mendukung.
          </p>
        </div>
        <div class="mission-card bg-[#2A2118] p-8 rounded-lg border border-[#3A2E24]">
          <div class="text-4xl text-[#D4AF37] mb-4"><i class="fas fa-eye"></i></div>
          <h3 class="text-2xl font-bold text-[#D4AF37] mb-3">Visi Kami</h3>
          <p class="leading-relaxed">
            Menjadi platform literasi digital terkemuka yang tidak hanya menjadi tempat membaca, tetapi juga pusat diskusi, pembelajaran, dan apresiasi karya sastra di Indonesia dan dunia.
          </p>
        </div>
      </div>
    </section>

    <!-- Timeline -->
    <section class="mb-20">
      <h2 class="text-3xl font-cinzel text-[#D4AF37] mb-12 text-center">Perjalanan Kami</h2>
      <div class="space-y-12">
        <?php
        $timeline = [
          ['Januari 2023', 'Ide Awal', 'Konsep Mabook pertama kali muncul dalam diskusi kecil tim pendiri di sebuah kedai kopi di Yogyakarta.'],
          ['April 2023', 'Versi Alpha', 'Peluncuran versi alpha dengan koleksi terbatas 50 buku klasik untuk pengujian awal.'],
          ['Agustus 2023', 'Peluncuran Resmi', 'Mabook versi 1.0 diluncurkan secara resmi dengan lebih dari 500 judul buku.'],
          ['Sekarang', 'Terus Berkembang', 'Mabook terus berkembang dengan fitur-fitur baru dan komunitas pembaca yang semakin besar.'],
        ];
        foreach ($timeline as [$waktu, $judul, $deskripsi]) {
          echo "
          <div class='bg-[#2A2118] p-6 rounded-lg border border-[#3A2E24] shadow-lg'>
            <div class='text-[#D4AF37] font-bold mb-2'>$waktu</div>
            <h3 class='text-xl font-bold text-[#D4AF37] mb-2'>$judul</h3>
            <p class='leading-relaxed'>$deskripsi</p>
          </div>";
        }
        ?>
      </div>
    </section>

    <!-- Tim -->
    <section class="mb-12">
      <h2 class="text-3xl font-cinzel text-[#D4AF37] mb-12 text-center">Tim Pengembang</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php
        $tim = [
          ['Ahmad Fauzi', 'Founder & Lead Developer', 'Penggagas utama Mabook dengan latar belakang ilmu komputer dan kecintaan pada sastra klasik.', 'photo-1560250097-0b93528c311a'],
          ['Dewi Sartika', 'UI/UX Designer', 'Menciptakan pengalaman pengguna yang elegan dan fungsional dengan sentuhan estetika klasik.', 'photo-1573496359142-b8d87734a5a2'],
          ['Budi Santoso', 'Backend Developer', 'Membangun infrastruktur teknis yang kuat untuk mendukung jutaan halaman yang dibaca setiap bulan.', 'photo-1507003211169-0a1dd7228f2d'],
          ['Rina Wijaya', 'Content Curator', 'Memilih dan menyusun koleksi buku berkualitas dengan latar belakang pendidikan sastra.', 'photo-1489424731084-a5d8b219a5bb'],
        ];
        foreach ($tim as [$nama, $jabatan, $desc, $img]) {
          echo "
          <div class='team-member-card bg-[#2A2118] p-6 rounded-lg border border-[#3A2E24] shadow-lg text-center'>
            <div class='member-photo w-32 h-32 rounded-full mx-auto mb-4 bg-cover bg-center' style=\"background-image: url('https://images.unsplash.com/$img?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80')\"></div>
            <h3 class='text-xl font-bold text-[#D4AF37]'>$nama</h3>
            <p class='text-[#A68A64] italic mb-4'>$jabatan</p>
            <p class='text-sm mb-4 leading-relaxed'>$desc</p>
          </div>";
        }
        ?>
      </div>
    </section>

    <!-- Nilai -->
    <section class="bg-[#2A2118] p-8 rounded-xl border border-[#3A2E24] shadow-lg">
      <h2 class="text-3xl font-cinzel text-[#D4AF37] mb-12 text-center">Nilai-Nilai Kami</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div>
          <div class="text-4xl text-[#D4AF37] mb-4"><i class="fas fa-book-open"></i></div>
          <h3 class="text-xl font-bold text-[#D4AF37] mb-3">Literasi</h3>
          <p class="leading-relaxed">Kami percaya pada kekuatan literasi untuk mengubah hidup dan membuka wawasan.</p>
        </div>
        <div>
          <div class="text-4xl text-[#D4AF37] mb-4"><i class="fas fa-users"></i></div>
          <h3 class="text-xl font-bold text-[#D4AF37] mb-3">Komunitas</h3>
          <p class="leading-relaxed">Membangun komunitas pembaca yang saling mendukung dan berbagi pengetahuan.</p>
        </div>
        <div>
          <div class="text-4xl text-[#D4AF37] mb-4"><i class="fas fa-lightbulb"></i></div>
          <h3 class="text-xl font-bold text-[#D4AF37] mb-3">Inovasi</h3>
          <p class="leading-relaxed">Terus berinovasi untuk memberikan pengalaman membaca yang lebih baik.</p>
        </div>
      </div>
    </section>
  </main>

  <?php require_once(__DIR__ . '/include/footer.php'); ?>

</body>
</html>
