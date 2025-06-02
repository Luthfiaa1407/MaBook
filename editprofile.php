<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil | MaBook</title>
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

        .edit-profile-container {
            display: flex;
            gap: 2rem;
        }

        .profile-sidebar {
            width: 300px;
            background-color: var(--dark-2);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--dark-3);
            align-self: flex-start;
            position: sticky;
            top: 100px;
        }

        .profile-avatar-edit {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-image: url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            border: 5px solid var(--accent-1);
            margin: 0 auto 1.5rem;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .profile-avatar-edit::after {
            content: '\f030';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: var(--accent-2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .profile-avatar-edit:hover::after {
            opacity: 1;
        }

        .profile-avatar-edit input {
            display: none;
        }

        .sidebar-menu {
            list-style: none;
            margin-top: 2rem;
        }

        .sidebar-menu li {
            margin-bottom: 0.8rem;
        }

        .sidebar-menu a {
            display: block;
            padding: 0.8rem 1rem;
            color: var(--accent-2);
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover, .sidebar-menu a.active {
            background-color: var(--dark-3);
            color: var(--accent-1);
        }

        .sidebar-menu a i {
            width: 25px;
            text-align: center;
            margin-right: 10px;
        }

        .edit-profile-content {
            flex: 1;
            background-color: var(--dark-2);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--dark-3);
        }

        .section-title {
            font-family: 'UnifrakturMaguntia', cursive;
            font-size: 2rem;
            color: var(--accent-2);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50%;
            height: 2px;
            background-color: var(--accent-1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: var(--accent-2);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            background-color: var(--dark-3);
            border: 1px solid var(--dark-3);
            color: var(--accent-2);
            font-family: inherit;
            font-size: 1rem;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent-1);
            box-shadow: 0 0 0 2px rgba(184, 92, 56, 0.3);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-row {
            display: flex;
            gap: 1.5rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background-color: var(--accent-1);
            color: var(--text-light);
            border: none;
            border-radius: 4px;
            font-family: inherit;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #9c4b2a;
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--accent-2);
            color: var(--accent-2);
        }

        .btn-outline:hover {
            background-color: rgba(224, 192, 151, 0.1);
            color: var(--accent-1);
            border-color: var(--accent-1);
        }

        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .preference-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .tag {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            background-color: var(--dark-3);
            color: var(--accent-2);
            border-radius: 20px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .tag:hover, .tag.active {
            background-color: var(--accent-1);
            color: var(--text-light);
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

            .edit-profile-container {
                flex-direction: column;
            }

            .profile-sidebar {
                width: 100%;
                position: static;
            }
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
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
                MaBook
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
        <div class="edit-profile-container">
            <!-- Sidebar -->
            <div class="profile-sidebar">
                <div class="profile-avatar-edit" id="avatarUpload">
                    <input type="file" id="avatarInput" accept="image/*">
                </div>
                
                <ul class="sidebar-menu">
                    <li><a href="profile.html" class="active"><i class="fas fa-user-circle"></i> Profil Saya</a></li>
                    <li><a href="profile-account.html"><i class="fas fa-user-cog"></i> Pengaturan Akun</a></li>
                    <li><a href="profile-privacy.html"><i class="fas fa-lock"></i> Privasi & Keamanan</a></li>
                    <li><a href="profile-notifications.html"><i class="fas fa-bell"></i> Notifikasi</a></li>
                    <li><a href="profile-reading.html"><i class="fas fa-book-reader"></i> Preferensi Membaca</a></li>
                </ul>
            </div>
            
            <!-- Edit Profile Content -->
            <div class="edit-profile-content">
                <h1 class="section-title">Edit Profil</h1>
                
                <form id="editProfileForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">Nama Depan</label>
                            <input type="text" id="firstName" class="form-control" value="Alexandra">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Nama Belakang</label>
                            <input type="text" id="lastName" class="form-control" value="Windsor">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" value="alex_windsor">
                    </div>
                    
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea id="bio" class="form-control">Kolektor buku tua dan pencinta literatur klasik. Membaca adalah jendela dunia dan jiwa.</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" id="location" class="form-control" value="Oxford, Inggris">
                    </div>
                    
                    <div class="form-group">
                        <label>Genre Favorit</label>
                        <div class="preference-tags">
                            <span class="tag active">Gothic</span>
                            <span class="tag active">Klasik</span>
                            <span class="tag">Filosofi</span>
                            <span class="tag">Puisi</span>
                            <span class="tag">Sejarah</span>
                            <span class="tag">Misteri</span>
                            <span class="tag">Fantasi Gelap</span>
                            <span class="tag">Psikologi</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Penulis Favorit</label>
                        <div class="preference-tags">
                            <span class="tag active">Edgar Allan Poe</span>
                            <span class="tag active">Oscar Wilde</span>
                            <span class="tag active">Mary Shelley</span>
                            <span class="tag">Fyodor Dostoevsky</span>
                            <span class="tag">Virginia Woolf</span>
                            <span class="tag">H.P. Lovecraft</span>
                        </div>
                    </div>
                    
                    <div class="btn-group">
                        <button type="submit" class="btn">Simpan Perubahan</button>
                        <a href="profile.html" class="btn btn-outline">Batal</a>
                    </div>
                </form>
            </div>
        </div>
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

        // Avatar Upload
        const avatarUpload = document.getElementById('avatarUpload');
        const avatarInput = document.getElementById('avatarInput');

        avatarUpload.addEventListener('click', function() {
            avatarInput.click();
        });

        avatarInput.addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    avatarUpload.style.backgroundImage = `url(${event.target.result})`;
                }
                
                reader.readAsDataURL(e.target.files[0]);
            }
        });

        // Tag Selection
        const tags = document.querySelectorAll('.tag');
        
        tags.forEach(tag => {
            tag.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // Form Submission
        const editProfileForm = document.getElementById('editProfileForm');
        
        editProfileForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Profil berhasil diperbarui!');
        });
    </script>
</body>
</html>