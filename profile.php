<?php
session_start();
$logoutNotif = isset($_GET['logout']) ? true : false;
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MABOOK | Perpustakaan Digital Dark Academia</title>
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
                
                <a href="editprofile.php" class="edit-profile-btn"><i class="fas fa-edit"></i> Edit Profil</a>
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
