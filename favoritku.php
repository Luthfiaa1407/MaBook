<?php
session_start();
$loggedIn = isset($_SESSION['nama']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buku Favorit Saya</title>

  <!-- Fonts dan Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Variabel CSS -->
  <style>
    :root {
      --dark-1: #1e1b18;
      --dark-2: #2e2b28;
      --dark-3: #3a3734;
      --accent-1: #b85c38;
      --accent-2: #e0c097;
      --text-light: #f5f5dc;
    }
  </style>
</head>
<body>
    <?php if (!$loggedIn): ?>
    <div class="locked-overlay">
        <div class="locked-message">
            <h2>🔒 Akses Dibatasi</h2>
            <p>Silakan login terlebih dahulu untuk mengakses fitur ini.</p>
            <a href="PemWebProjectAkhir/view/login.php" class="btn-login-overlay">Login Sekarang</a>
        </div>
    </div>
<?php endif; ?>

  <!-- Header -->
  <header>
        <div class="header-container">
            <a href="index.html" class="logo">
                <i class="fas fa-book-open"></i>
                MaBook
            </a>
            
            <nav>
                <ul>
                    <li><a href="dashboard.php">Beranda</a></li>
                    <li><a href="library.html">Koleksi</a></li>
                    <li><a href="categories.html">Kategori</a></li>
                    <li><a href="favorites.html">Favoritku</a></li>
                    <li><a href="aboutUs.php">Tentang Kami</a></li>
                </ul>
            </nav>
            
            <div class="search-bar">
                <input type="text" placeholder="Cari buku, penulis...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            
            <div class="user-profile" id="profileToggle">
                <div class="profile-pic"></div>
                <div class="profile-dropdown" id="profileDropdown">
                    <a href="profile.html"><i class="fas fa-user"></i> Profil Saya</a>
                    <a href="library.html"><i class="fas fa-book"></i> Perpustakaan</a>
                    <a href="settings.html"><i class="fas fa-cog"></i> Pengaturan</a>
                    <a href="logout.html"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                </div>
            </div>
        </div>
    </header>

  <!-- Hero Section -->
  <main>
    <div class="hero">
      <div class="hero-content">
        <h1>Daftar Buku Favorit Saya</h1>
        <p>Koleksi buku yang paling saya sukai dan berkesan.</p>
      </div>
    </div>

    <!-- List Buku -->
    <section class="features">
      <?php
        $books = [
            [
                "title" => "Laskar Pelangi",
                "author" => "Andrea Hirata",
                "desc" => "Sebuah kisah inspiratif tentang sekelompok anak di Belitung yang berjuang untuk mendapatkan pendidikan.",
                "image" => "https://placehold.co/200x250"
            ],
            [
                "title" => "Bumi Manusia",
                "author" => "Pramoedya Ananta Toer",
                "desc" => "Novel yang menceritakan kehidupan masyarakat Indonesia pada masa penjajahan Belanda.",
                "image" => "https://placehold.co/200x250"
            ],
            [
                "title" => "Sapiens: A Brief History of Humankind",
                "author" => "Yuval Noah Harari",
                "desc" => "Sebuah analisis mendalam tentang sejarah manusia dari zaman prasejarah hingga modern.",
                "image" => "https://placehold.co/200x250"
            ],
            [
                "title" => "1984",
                "author" => "George Orwell",
                "desc" => "Novel distopia yang menggambarkan masyarakat totaliter yang dikendalikan oleh pengawasan dan propaganda.",
                "image" => "https://placehold.co/200x250"
            ],
            [
                "title" => "The Alchemist",
                "author" => "Paulo Coelho",
                "desc" => "Sebuah kisah tentang pencarian makna hidup dan mengikuti impian kita.",
                "image" => "https://placehold.co/200x250"
            ],
            [
                "title" => "Harry Potter and the Sorcerer's Stone",
                "author" => "J.K. Rowling",
                "desc" => "Kisah petualangan seorang penyihir muda di sekolah sihir Hogwarts.",
                "image" => "https://placehold.co/200x250"
            ]
        ];

        foreach ($books as $book) {
            echo '<div class="feature-card">';
            echo '<div class="book-cover" style="background-image: url(\'' . $book["image"] . '\')"></div>';
            echo '<div class="book-details">';
            echo '<h3 class="book-title">' . htmlspecialchars($book["title"]) . '</h3>';
            echo '<p class="book-author">Penulis: ' . htmlspecialchars($book["author"]) . '</p>';
            echo '<p class="feature-desc">' . htmlspecialchars($book["desc"]) . '</p>';
            echo '</div></div>';
        }
      ?>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer-bottom">
      <p>&copy; 2023 Buku Favorit Saya. Semua hak dilindungi.</p>
    </div>
  </footer>

</body>
</html>