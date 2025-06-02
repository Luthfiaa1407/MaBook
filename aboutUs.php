<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | MaBook - Perpustakaan Digital Dark Academia</title>
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

        nav ul li a.active {
            color: var(--accent-1);
            font-weight: bold;
        }

        nav ul li a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--accent-1);
        }

        /* Main Content */
        main {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        /* About Hero Section */
        .about-hero {
            background: linear-gradient(rgba(28, 18, 11, 0.8), rgba(28, 18, 11, 0.8)), 
                        url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .about-hero-content {
            max-width: 800px;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .about-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--accent-2);
            font-family: 'UnifrakturMaguntia', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            letter-spacing: 2px;
        }

        .about-hero p {
            font-size: 1.2rem;
            line-height: 1.8;
        }

        /* About Content Sections */
        .about-section {
            background-color: var(--dark-2);
            padding: 4rem;
            border-radius: 8px;
            margin-bottom: 4rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--dark-3);
            position: relative;
            overflow: hidden;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background-image: url('https://www.transparenttextures.com/patterns/black-paper.png');
            opacity: 0.2;
            z-index: 0;
        }

        .section-title {
            font-family: 'UnifrakturMaguntia', cursive;
            color: var(--accent-2);
            font-size: 2.5rem;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 2px;
            background-color: var(--accent-1);
        }

        .about-content {
            position: relative;
            z-index: 1;
        }

        .about-content p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            color: var(--accent-2);
            font-size: 1.1rem;
        }

        /* Mission & Vision */
        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin: 3rem 0;
        }

        .mission-card, .vision-card {
            background-color: var(--dark-3);
            padding: 2rem;
            border-radius: 8px;
            border-left: 5px solid var(--accent-1);
            transition: transform 0.3s;
        }

        .mission-card:hover, .vision-card:hover {
            transform: translateY(-5px);
        }

        .mission-card h3, .vision-card h3 {
            color: var(--accent-1);
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-weight: 600;
        }

        /* Values Section */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .value-card {
            background-color: var(--dark-3);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s;
            border-bottom: 3px solid var(--accent-1);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .value-icon {
            font-size: 2.5rem;
            color: var(--accent-1);
            margin-bottom: 1.5rem;
        }

        .value-title {
            color: var(--accent-2);
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .team-member {
            background-color: var(--dark-3);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s;
            border: 1px solid var(--dark-3);
            position: relative;
            overflow: hidden;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--accent-1);
        }

        .member-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            background-size: cover;
            background-position: center;
            border: 3px solid var(--accent-1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .member-name {
            color: var(--accent-2);
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .member-position {
            color: var(--accent-1);
            font-style: italic;
            margin-bottom: 1.5rem;
            display: block;
            font-size: 0.9rem;
        }

        .member-bio {
            color: var(--accent-2);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .member-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .member-social a {
            color: var(--accent-2);
            transition: color 0.3s;
            font-size: 1.1rem;
        }

        .member-social a:hover {
            color: var(--accent-1);
        }

        /* Timeline Section */
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 4rem auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 2px;
            background-color: var(--accent-1);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--accent-2);
            border: 3px solid var(--accent-1);
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .left::after {
            right: -10px;
        }

        .right::after {
            left: -10px;
        }

        .timeline-content {
            padding: 20px;
            background-color: var(--dark-3);
            border-radius: 8px;
            border-left: 3px solid var(--accent-1);
            position: relative;
        }

        .timeline-content::before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            top: 20px;
        }

        .left .timeline-content::before {
            border-right: 10px solid var(--dark-3);
            right: -10px;
        }

        .right .timeline-content::before {
            border-left: 10px solid var(--dark-3);
            left: -10px;
        }

        .timeline-date {
            color: var(--accent-1);
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .timeline-title {
            color: var(--accent-2);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .timeline-desc {
            color: var(--accent-2);
            opacity: 0.9;
            font-size: 0.95rem;
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

        /* Responsive Design */
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
        }

        @media (max-width: 768px) {
            .about-hero h1 {
                font-size: 2.5rem;
            }

            .about-section {
                padding: 3rem 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item::after {
                left: 21px;
            }
            
            .left::after, .right::after {
                left: 21px;
            }
            
            .right {
                left: 0%;
            }
        }

        @media (max-width: 576px) {
            .about-hero {
                height: 350px;
            }

            .about-hero h1 {
                font-size: 2rem;
            }

            .about-hero p {
                font-size: 1rem;
            }

            .mission-vision {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
</head>
<body>
  
    <header>
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-book-open"></i>
                MaBooK
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
        <!-- About Section -->
        <section class="about-section">
            <div class="about-content">
                <h2 class="section-title">Kisah Kami</h2>
                <p>MaBook terbentuk pada tahun 2025 dari obrolan mengenai tugas akhir pemrograman web. Sekelompok mahasiswa ilmu komputer yang frustasi dengan web apa yang dibutuhkan oleh banyak orang terkhusus dengan para pembaca buku dark akademia</p>
                
                <p></p>
                
                <div class="mission-vision">
                    <div class="mission-card">
                        <h3>Misi Kami</h3>
                        <p>Menyediakan akses terhadap literatur berkualitas dari berbagai zaman dan budaya, memelihara api kecintaan akan membaca, serta menciptakan komunitas pembaca yang kritis dan reflektif.</p>
                    </div>
                    
                    <div class="vision-card">
                        <h3>Visi Kami</h3>
                        <p>Menjadi perpustakaan digital Dark Academia terkemuka yang tidak hanya menyimpan buku, tetapi juga merawat tradisi intelektual dan mendorong dialog antar generasi melalui karya-karya abadi.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Team Section -->
        <section class="about-section">
            <div class="about-content">
                <h2 class="section-title">Tim Inti</h2>
                <p>Di balik MaBook berdiri tim multidisiplin yang dipersatukan oleh kecintaan pada buku dan komitmen terhadap literasi digital.</p>
                
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo" style="background-image: url('https://i.pinimg.com/474x/2a/e6/32/2ae6321201346ff5837c810f05e4e0e2.jpg');"></div>
                        <h4 class="member-name">Arjuna Gunatama </h4>
                        <span class="member-position"></span>
                        <p class="member-bio"></p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-photo" style="background-image: url('https://i.pinimg.com/474x/29/b3/92/29b3926c930f388a53ce2658cf8ffbef.jpg');"></div>
                        <h4 class="member-name">Clara Monica</h4>
                        <span class="member-position"></span>
                        <p class="member-bio"></p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-photo" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1kjyqWRZ2Te7F-utbrEDpIsLqFm1p75RvpA&s');"></div>
                        <h4 class="member-name">Luthfia Rahma</h4>
                        <span class="member-position"></span>
                        <p class="member-bio"></p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-photo" style="background-image: url('http://giantbomb.com/a/uploads/scale_medium/13/135472/3031425-1800398542-latest');"></div>
                        <h4 class="member-name">Sheva Lukiyanto</h4>
                        <span class="member-position"></span>
                        <p class="member-bio"></p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        const profileToggle = document.getElementById('profileToggle');
        const profileDropdown = document.getElementById('profileDropdown');

        profileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            profileDropdown.classList.toggle('active');
        });

        document.addEventListener('click', function() {
            profileDropdown.classList.remove('active');
        });

        profileDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    </script>
</body>
</html>