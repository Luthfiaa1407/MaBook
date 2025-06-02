<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaBook | Perpustakaan Digital Dark Academia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            /* Autumn Dark Academia Color Palette */
            --dark-1: #1A120B; /* Darkest Brown */
            --dark-2: #3C2A21; /* Dark Brown */
            --dark-3: #5C3D2E; /* Medium Brown */
            --accent-1: #B85C38; /* Rust/Red */
            --accent-2: #E0C097; /* Light Beige */
            --text-light: #F5F5F5;
            --text-dark: #1A120B;
            --paper: #F0E4D4; /* Vintage Paper */
            --old-paper: #E7D8C0;
            --olive: #6B8E23; /* Olive Green */
            --burgundy: #800020; /* Burgundy */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Crimson Text', 'Times New Roman', serif;
            background-color: var(--dark-1);
            color: var(--text-light);
            line-height: 1.6;
            background-image: url('https://www.transparenttextures.com/patterns/black-paper.png');
        }

        /* Header Styles */
        header {
            background: linear-gradient(to right, var(--dark-2), var(--dark-3));
            padding: 0.5rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid var(--accent-1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            font-family: 'UnifrakturMaguntia', cursive;
            font-size: 2.5rem;
            color: var(--accent-2);
            text-decoration: none;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--accent-1);
        }

        nav ul {
            display: flex;
            list-style: none;
            align-items: center;
        }

        nav ul li {
            margin-left: 1.5rem;
            position: relative;
        }

        nav ul li a {
            color: var(--accent-2);
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
            position: relative;
            padding-bottom: 5px;
        }

        nav ul li a:hover {
            color: var(--accent-1);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background-color: var(--accent-1);
            transition: width 0.3s;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .user-profile {
            display: flex;
            align-items: center;
            cursor: pointer;
            position: relative;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--accent-2);
            background-image: url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            border: 2px solid var(--accent-1);
            margin-left: 1rem;
        }

        .profile-dropdown {
            position: absolute;
            top: 60px;
            right: 0;
            background-color: var(--dark-2);
            border: 1px solid var(--dark-3);
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            width: 200px;
            display: none;
            z-index: 10;
        }

        .profile-dropdown.active {
            display: block;
        }

        .profile-dropdown a {
            display: block;
            padding: 0.8rem 1rem;
            color: var(--accent-2);
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .profile-dropdown a:hover {
            background-color: var(--dark-3);
            color: var(--accent-1);
        }

        .profile-dropdown a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .search-bar {
            display: flex;
            margin-left: 2rem;
        }

        .search-bar input {
            background-color: var(--dark-1);
            border: 1px solid var(--dark-3);
            padding: 0.5rem 1rem;
            color: var(--text-light);
            font-family: inherit;
            width: 250px;
            transition: all 0.3s;
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--accent-1);
            box-shadow: 0 0 0 2px rgba(184, 92, 56, 0.3);
        }

        .search-bar button {
            background-color: var(--accent-1);
            color: var(--text-light);
            border: none;
            padding: 0 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #9c4b2a;
        }

        /* Main Content */
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .hero {
            background: linear-gradient(rgba(28, 18, 11, 0.7), rgba(28, 18, 11, 0.7)), 
                        url('https://images.unsplash.com/photo-1505771215590-c5fa0aec29b8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(184, 92, 56, 0.1) 0%, rgba(184, 92, 56, 0) 50%, rgba(184, 92, 56, 0.1) 100%);
        }

        .hero-content {
            max-width: 800px;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--accent-2);
            font-family: 'UnifrakturMaguntia', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            letter-spacing: 2px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .cta-button {
            display: inline-block;
            background-color: var(--accent-1);
            color: var(--text-light);
            padding: 0.8rem 2rem;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: all 0.3s;
            border: 1px solid var(--accent-1);
        }

        .cta-button:hover {
            background-color: transparent;
            color: var(--accent-1);
            transform: translateY(-3px);
        }

        /* Quote Section */
        .quote-section {
            background: linear-gradient(rgba(28, 18, 11, 0.8), rgba(28, 18, 11, 0.8)), 
                        url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .quote-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .quote-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
        }

        .quote-text {
            font-size: 1.8rem;
            font-style: italic;
            color: var(--accent-2);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .quote-author {
            font-size: 1.2rem;
            color: var(--accent-1);
            font-weight: bold;
        }

        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .feature-card {
            background-color: var(--dark-2);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--dark-3);
            transition: transform 0.3s;
            position: relative;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--accent-1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--accent-1);
            margin-bottom: 1.5rem;
        }

        .feature-title {
            font-size: 1.5rem;
            color: var(--accent-2);
            margin-bottom: 1rem;
        }

        .feature-desc {
            color: var(--accent-2);
            opacity: 0.9;
        }

        /* Footer */
        footer {
            background-color: var(--dark-2);
            padding: 3rem 0 1.5rem;
            border-top: 1px solid var(--dark-3);
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column h3 {
            color: var(--accent-2);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
            position: relative;
            display: inline-block;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50%;
            height: 2px;
            background-color: var(--accent-1);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.8rem;
        }

        .footer-column ul li a {
            color: var(--accent-2);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: var(--accent-1);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--dark-3);
            color: var(--accent-2);
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: var(--accent-1);
            color: var(--text-light);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid var(--dark-3);
            color: var(--accent-2);
            font-size: 0.9rem;
        }


        @media (max-width: 992px) {
            .header-container {
                flex-wrap: wrap;
                padding: 1rem;
            }

            .logo {
                margin-bottom: 1rem;
            }

            nav {
                order: 3;
                width: 100%;
                margin-top: 1rem;
            }

            nav ul {
                justify-content: center;
                flex-wrap: wrap;
            }

            nav ul li {
                margin: 0.5rem;
            }

            .search-bar {
                order: 2;
                margin: 1rem auto 0;
                width: 100%;
            }

            .search-bar input {
                width: 100%;
            }

            .user-profile {
                margin-left: auto;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .quote-text {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero {
                height: 400px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .quote-text {
                font-size: 1.2rem;
            }

            .quote-author {
                font-size: 1rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-book-open"></i>
                MaBook
            </a>
            
            <nav>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#collections">Koleksi</a></li>
                    <li><a href="#categories">Kategori</a></li>
                    <li><a href="#favorites">Favoritku</a></li>
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
                    <a href="profile.php"><i class="fas fa-user"></i> Profil Saya</a>
                    <a href="#library"><i class="fas fa-book"></i> Perpustakaan</a>
                    <a href="#settings"><i class="fas fa-cog"></i> Pengaturan</a>
                    <a href="#logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>MaBook</h1>
                <p>Perpustakaan digital Dark Academia yang menghadirkan koleksi literatur klasik dan kontemporer terbaik. Temukan dunia pengetahuan, fiksi spekulatif, puisi abadi, dan karya-karya pemikiran mendalam dalam genggaman Anda.</p>
                <a href="#collections" class="cta-button">Jelajahi Koleksi</a>
            </div>
        </section>

        <!-- Quote Section -->
        <section class="quote-section">
            <div class="quote-content">
                <p class="quote-text">"Reading is essential for those who seek to rise above the ordinary."</p>
                <p class="quote-author">— Jim Rohn</p>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <h2 class="section-title" style="text-align: center; margin-bottom: 2rem; color: var(--accent-2);">Mengapa Memilih MaBook?</h2>
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="feature-title">Koleksi Eksklusif</h3>
                    <p class="feature-desc">Ribuan buku digital dari berbagai genre, termasuk literatur klasik, filosofi, sejarah, dan fiksi spekulatif.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-moon"></i>
                    </div>
                    <h3 class="feature-title">Mode Baca Nyaman</h3>
                    <p class="feature-desc">Mode malam dan penyesuaian font untuk pengalaman membaca yang lebih nyaman di segala kondisi.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <h3 class="feature-title">Book Tracker</h3>
                    <p class="feature-desc">Lacak buku yang sedang dan akan dibaca dengan sistem yang terorganisir dan personal.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <h3 class="feature-title">Catatan Pribadi</h3>
                    <p class="feature-desc">Tambahkan highlight dan catatan pribadi di setiap halaman buku yang Anda baca.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3 class="feature-title">Reading Streak</h3>
                    <p class="feature-desc">Pertahankan kebiasaan membaca dengan sistem streak harian yang memotivasi.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <h3 class="feature-title">AudioBook</h3>
                    <p class="feature-desc">Nikmati koleksi audio book untuk pengalaman mendengarkan yang imersif (coming soon).</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Tentang MaBook</h3>
                <ul>
                    <li><a href="#">Visi & Misi</a></li>
                    <li><a href="#">Tim Kami</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Bantuan</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Panduan Penggunaan</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                    <li><a href="#">Laporan Masalah</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                    <li><a href="#">Lisensi</a></li>
                    <li><a href="#">Kebijakan Hak Cipta</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Terhubung</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
                <p style="margin-top: 1rem; color: var(--accent-2);">newsletter@MaBook.com</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 MaBook. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Profile Dropdown Toggle
        const profileToggle = document.getElementById('profileToggle');
        const profileDropdown = document.getElementById('profileDropdown');

        profileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            profileDropdown.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function() {
            profileDropdown.classList.remove('active');
        });

        // Prevent dropdown from closing when clicking inside it
        profileDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>