<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya | Readify</title>
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

        /* Profile Header */
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 3rem;
            background-color: var(--dark-2);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--dark-3);
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-image: url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            border: 5px solid var(--accent-1);
            margin-right: 2rem;
            position: relative;
        }

        .profile-avatar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(184, 92, 56, 0.2), rgba(184, 92, 56, 0));
        }

        .profile-info h1 {
            font-size: 2.5rem;
            color: var(--accent-2);
            margin-bottom: 0.5rem;
            font-family: 'UnifrakturMaguntia', cursive;
        }

        .profile-info p {
            color: var(--accent-1);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .profile-stats {
            display: flex;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.8rem;
            color: var(--accent-1);
            font-weight: bold;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--accent-2);
            opacity: 0.8;
        }

        .edit-profile-btn {
            display: inline-block;
            background-color: transparent;
            color: var(--accent-2);
            padding: 0.5rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
            border: 1px solid var(--accent-2);
            font-size: 0.9rem;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .edit-profile-btn:hover {
            background-color: rgba(224, 192, 151, 0.1);
            color: var(--accent-1);
            border-color: var(--accent-1);
        }

        /* Profile Tabs */
        .profile-tabs {
            display: flex;
            border-bottom: 1px solid var(--dark-3);
            margin-bottom: 2rem;
        }

        .tab-btn {
            padding: 0.8rem 1.5rem;
            background: none;
            border: none;
            color: var(--accent-2);
            font-family: inherit;
            font-size: 1rem;
            cursor: pointer;
            position: relative;
            transition: all 0.3s;
        }

        .tab-btn.active {
            color: var(--accent-1);
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--accent-1);
        }

        .tab-btn:hover:not(.active) {
            background-color: rgba(224, 192, 151, 0.05);
        }

        /* Tab Content */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* My Library Section */
        .bookshelf {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .book-card {
            background-color: var(--dark-2);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
            border: 1px solid var(--dark-3);
            position: relative;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        .book-cover {
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .book-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--accent-1);
            color: var(--text-light);
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .book-details {
            padding: 1rem;
        }

        .book-title {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--accent-2);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .book-author {
            color: var(--accent-1);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .book-progress {
            height: 4px;
            background-color: var(--dark-3);
            border-radius: 2px;
            margin: 0.5rem 0;
        }

        .progress-bar {
            height: 100%;
            background-color: var(--accent-1);
            border-radius: 2px;
        }

        .progress-text {
            font-size: 0.8rem;
            color: var(--accent-2);
            text-align: right;
        }

        /* Reading Stats */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background-color: var(--dark-2);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--dark-3);
            position: relative;
        }

        .stat-card h3 {
            color: var(--accent-2);
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            position: relative;
            display: inline-block;
        }

        .stat-card h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50%;
            height: 2px;
            background-color: var(--accent-1);
        }

        .stat-value {
            font-size: 2.5rem;
            color: var(--accent-1);
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .stat-description {
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

        /* Responsive */
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

            .profile-header {
                flex-direction: column;
                text-align: center;
            }

            .profile-avatar {
                margin-right: 0;
                margin-bottom: 1.5rem;
            }

            .profile-stats {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .profile-info h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .profile-avatar {
                width: 120px;
                height: 120px;
            }

            .profile-stats {
                flex-wrap: wrap;
                gap: 1rem;
            }

            .stat-item {
                flex: 1 0 40%;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <a href="index.html" class="logo">
                <i class="fas fa-book-open"></i>
                Readify
            </a>
            
            <nav>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="library.html">Koleksi</a></li>
                    <li><a href="categories.html">Kategori</a></li>
                    <li><a href="favorites.html">Favoritku</a></li>
                    <li><a href="about.html">Tentang Kami</a></li>
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

    <!-- Main Content -->
    <main>
        <!-- Profile Header -->
        <section class="profile-header">
            <div class="profile-avatar"></div>
            <div class="profile-info">
                <h1>Alexandra Windsor</h1>
                <p>Pembaca Dark Academia sejak 2022</p>
                <p>"Kolektor buku tua dan pencinta literatur klasik"</p>
                
                <div class="profile-stats">
                    <div class="stat-item">
                        <div class="stat-number">247</div>
                        <div class="stat-label">Buku Dibaca</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">36</div>
                        <div class="stat-label">Sedang Dibaca</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">89</div>
                        <div class="stat-label">Akan Dibaca</div>
                    </div>
                </div>
                
                <a href="#" class="edit-profile-btn"><i class="fas fa-edit"></i> Edit Profil</a>
            </div>
        </section>

        <!-- Profile Tabs -->
        <div class="profile-tabs">
            <button class="tab-btn active" data-tab="library">Perpustakaan Saya</button>
            <button class="tab-btn" data-tab="reading">Sedang Dibaca</button>
            <button class="tab-btn" data-tab="stats">Statistik Membaca</button>
            <button class="tab-btn" data-tab="wishlist">Wishlist</button>
        </div>

        <!-- My Library Content -->
        <div id="library" class="tab-content active">
            <h2 style="color: var(--accent-2); margin-bottom: 1.5rem;">Koleksi Buku Saya</h2>
            <div class="bookshelf">
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">Selesai</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">The Picture of Dorian Gray</h3>
                        <p class="book-author">Oscar Wilde</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 100%;"></div>
                        </div>
                        <p class="progress-text">Selesai dibaca</p>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">75%</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">Crime and Punishment</h3>
                        <p class="book-author">Fyodor Dostoevsky</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 75%;"></div>
                        </div>
                        <p class="progress-text">Halaman 375/500</p>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1535905557558-afc4877a26fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">Selesai</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">The Raven</h3>
                        <p class="book-author">Edgar Allan Poe</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 100%;"></div>
                        </div>
                        <p class="progress-text">Selesai dibaca</p>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1531346878377-a5be20888e57?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">28%</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">Frankenstein</h3>
                        <p class="book-author">Mary Shelley</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 28%;"></div>
                        </div>
                        <p class="progress-text">Halaman 84/300</p>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">Selesai</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">Dracula</h3>
                        <p class="book-author">Bram Stoker</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 100%;"></div>
                        </div>
                        <p class="progress-text">Selesai dibaca</p>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">10%</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">The Art of War</h3>
                        <p class="book-author">Sun Tzu</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 10%;"></div>
                        </div>
                        <p class="progress-text">Halaman 15/150</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Currently Reading Content -->
        <div id="reading" class="tab-content">
            <h2 style="color: var(--accent-2); margin-bottom: 1.5rem;">Sedang Dibaca</h2>
            <div class="bookshelf">
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">75%</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">Crime and Punishment</h3>
                        <p class="book-author">Fyodor Dostoevsky</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 75%;"></div>
                        </div>
                        <p class="progress-text">Halaman 375/500</p>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1531346878377-a5be20888e57?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">28%</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">Frankenstein</h3>
                        <p class="book-author">Mary Shelley</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 28%;"></div>
                        </div>
                        <p class="progress-text">Halaman 84/300</p>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                        <span class="book-badge">10%</span>
                    </div>
                    <div class="book-details">
                        <h3 class="book-title">The Art of War</h3>
                        <p class="book-author">Sun Tzu</p>
                        <div class="book-progress">
                            <div class="progress-bar" style="width: 10%;"></div>
                        </div>
                        <p class="progress-text">Halaman 15/150</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reading Stats Content -->
        <div id="stats" class="tab-content">
            <h2 style="color: var(--accent-2); margin-bottom: 1.5rem;">Statistik Membaca</h2>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>Membaca Minggu Ini</h3>
                    <div class="stat-value">8.5 <span style="font-size: 1.5rem;">jam</span></div>
                    <p class="stat-description">Rata-rata 1.2 jam/hari. Target Anda: 10 jam/minggu</p>
                </div>
                
                <div class="stat-card">
                    <h3>Bulan Ini</h3>
                    <div class="stat-value">4 <span style="font-size: 1.5rem;">buku</span></div>
                    <p class="stat-description">Selesai membaca 4 dari 5 buku yang direncanakan</p>
                </div>
                
                <div class="stat-card">
                    <h3>Streak Membaca</h3>
                    <div class="stat-value">24 <span style="font-size: 1.5rem;">hari</span></div>
                    <p class="stat-description">Anda telah membaca setiap hari selama 24 hari berturut-turut!</p>
                </div>
                
                <div class="stat-card">
                    <h3>Genre Favorit</h3>
                    <div class="stat-value">Gothic</div>
                    <p class="stat-description">45% dari buku yang Anda baca termasuk dalam genre Gothic Literature</p>
                </div>
                
                <div class="stat-card">
                    <h3>Halaman per Hari</h3>
                    <div class="stat-value">32</div>
                    <p class="stat-description">Rata-rata Anda membaca 32 halaman setiap hari</p>
                </div>
                
                <div class="stat-card">
                    <h3>Penulis Favorit</h3>
                    <div class="stat-value">Edgar Allan Poe</div>
                    <p class="stat-description">Anda telah membaca 12 karya dari penulis ini</p>
                </div>
            </div>
        </div>

        <!-- Wishlist Content -->
        <div id="wishlist" class="tab-content">
            <h2 style="color: var(--accent-2); margin-bottom: 1.5rem;">Wishlist Buku</h2>
            <div class="bookshelf">
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1510172951991-856a62a9e395?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="book-details">
                        <h3 class="book-title">The Secret History</h3>
                        <p class="book-author">Donna Tartt</p>
                        <a href="#" class="edit-profile-btn" style="margin-top: 0.5rem; display: block; text-align: center;">Beli Sekarang</a>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1600189261867-8e2a4f7a1d57?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="book-details">
                        <h3 class="book-title">The Iliad</h3>
                        <p class="book-author">Homer</p>
                        <a href="#" class="edit-profile-btn" style="margin-top: 0.5rem; display: block; text-align: center;">Beli Sekarang</a>
                    </div>
                </div>
                
                <div class="book-card">
                    <div class="book-cover" style="background-image: url('https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="book-details">
                        <h3 class="book-title">The Divine Comedy</h3>
                        <p class="book-author">Dante Alighieri</p>
                        <a href="#" class="edit-profile-btn" style="margin-top: 0.5rem; display: block; text-align: center;">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Tentang Readify</h3>
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
                <p style="margin-top: 1rem; color: var(--accent