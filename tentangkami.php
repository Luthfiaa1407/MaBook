<?php
require_once(__DIR__ . '/config/db.php');
require_once(__DIR__ . '/config/config.php');
require_once(__DIR__ . '/functions/helper.php');
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - Mabook</title>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="src/output.css">
  <link rel="stylesheet" href="src/footercss.css">
</head>

<body>
  <?php require_once(__DIR__ . '/include/header.php'); ?>

  <main class="w-11/12 max-w-6xl mx-auto">
    <section class="about-hero">
      <div class="container">
        <h1>Tentang Mabook</h1>
        <p>Perpustakaan digital yang menghadirkan dunia literasi klasik dan kontemporer dalam genggaman Anda</p>
      </div>
    </section>

    <section class="about-content">
      <div class="container">

        <div class="about-section">
          <h2>Siapa Kami</h2>
          <p>Mabook adalah perpustakaan digital yang dikembangkan oleh tim pencinta literasi dengan semangat tinggi untuk melestarikan dan menyebarkan karya sastra berkualitas.</p>
          <p>Kami percaya bahwa akses terhadap bacaan berkualitas seharusnya mudah, menyenangkan, dan terjangkau - itulah yang menjadi landasan kami dalam membangun Mabook.</p>
        </div>

        <div class="about-section">
          <h2>Tim Pengembang Mabook</h2>
          <div class="team-grid">
            <!-- Arjuna -->
            <div class="team-member">
              <img src="https://pin.it/52dS4KOjY" alt="Arjuna" class="member-photo">
              <h3 class="member-name">Arjuna Gunatama Sihombing</h3>
              <span class="member-position">2317051085</span>
              <p class="member-bio">Bertanggung jawab atas pengembangan sistem inti Mabook dan arsitektur backend.</p>
              <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
              </div>
            </div>

            <!-- Clara -->
            <div class="team-member">
              <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Clara" class="member-photo">
              <h3 class="member-name">Clara Monica</h3>
              <span class="member-position">2317051055</span>
              <p class="member-bio">Bertanggung jawab atas pengembangan sistem inti Mabook dan arsitektur backend user serta mendesain pengalaman pengguna yang elegan dan fungsional dengan sentuhan klasik.</p>
              <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
              </div>
            </div>

            <!-- Luthfia -->
            <div class="team-member">
              <img src="../images/lut" alt="Luthfia" class="member-photo">
              <h3 class="member-name">Luthfia Rahma Sholihah</h3>
              <span class="member-position">2317051051</span>
              <p class="member-bio">Bertanggung jawab atas pengembangan sistem inti Mabook dan arsitektur backend Admin serta mendesain pengalaman pengguna yang elegan dan fungsional dengan sentuhan klasik.</p>
              <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
              </div>
            </div>

            <!-- Sheva -->
            <div class="team-member">
              <img src="../images/shev.jpeg" alt="Sheva" class="member-photo">
              <h3 class="member-name">Sheva Lukiyanto</h3>
              <span class="member-position">2317051046</span>
              <p class="member-bio">Bertanggung jawab atas pengembangan sistem inti Mabook dan arsitektur backend.</p>
              <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>


        <div class="about-section">
          <h2>Visi & Misi Kami</h2>
          <div class="mission-cards">
            <div class="mission-card">
              <h3>Visi</h3>
              <p>Menjadi platform literasi digital terdepan yang tidak hanya menjadi tempat membaca, tetapi juga pusat diskusi, pembelajaran, dan apresiasi karya sastra.</p>
            </div>
            <div class="mission-card">
              <h3>Misi 1</h3>
              <p>Menyediakan akses mudah terhadap koleksi buku digital berkualitas dari berbagai genre dan periode waktu.</p>
            </div>
            <div class="mission-card">
              <h3>Misi 2</h3>
              <p>Mengembangkan fitur inovatif untuk meningkatkan pengalaman membaca dan berinteraksi dengan teks.</p>
            </div>
            <div class="mission-card">
              <h3>Misi 3</h3>
              <p>Membangun komunitas pembaca yang aktif untuk berdiskusi dan berbagi pengetahuan tentang literatur.</p>
            </div>
            <div class="mission-card">
              <h3>Misi 4</h3>
              <p>Melestarikan karya sastra klasik dengan menghadirkannya dalam format digital yang mudah diakses.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>

  <?php require_once(__DIR__ . '/include/footer.php'); ?>
</body>

</html>
