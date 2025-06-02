<?php
session_start();
$logoutNotif = isset($_GET['logout']) ? true : false;
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Perpustakaan Digital Dark Academia</title>
    <link rel="stylesheet" href="style.css">
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
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
</head>
<body>
    <?php if ($logoutNotif): ?>
    <div class="logout-alert">
        Anda telah berhasil keluar dari akun. Sekarang dalam mode tamu.
    </div>
    <?php endif; ?>
    <!-- Header -->
    <header>
        <div id="user-menu">
        </div>
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-book-open"></i>
                MABOOK
            </a>
            
            <nav>
                <ul>
                    <li><a href="dashboard.php">Beranda</a></li>
                    <li><a href="disimpan.php">Koleksi</a></li>
                    <li><a href="#categories">Kategori</a></li>
                    <li><a href="favoritku.php">Favoritku</a></li>
                    <li><a href="aboutUs.php">Tentang Kami</a></li>
                </ul>
            </nav>
            
            <div class="search-bar">
                <input type="text" placeholder="Cari buku, penulis...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            
            <div class="user-profile" id="profileToggle">
<?php if (!empty($_SESSION['nama'])): ?>
    <div class="user-profile" id="profileToggle">
        <div class="profile-pic"></div>
        <div class="profile-dropdown" id="profileDropdown">
            <a href="profile.php"><i class="fas fa-user"></i> Profil Saya</a>
            <a href="#library"><i class="fas fa-book"></i> Perpustakaan</a>
            <a href="#settings"><i class="fas fa-cog"></i> Pengaturan</a>
            <a href="#" onclick="confirmLogout(event)"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
    </div>
<?php else: ?>
    <div class="auth-buttons">
        <a href="PemWebProjectAkhir/view/login.php" class="btn-login">Login</a>
        <a href="PemWebProjectAkhir/view/daftar.php" class="btn-signup">Daftar</a>
    </div>
<?php endif; ?>
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
