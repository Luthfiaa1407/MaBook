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

  <!-- Header -->
  <header>
    <div class="header-container">
      <a href="#" class="logo"><i class="fas fa-book"></i> Buku Favorit</a>
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
