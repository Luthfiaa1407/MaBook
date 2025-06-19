<?php
// Session check and user data initialization
$isLoggedIn = isset($_SESSION['logged_user']);
$loggedUser = $isLoggedIn ? $_SESSION['logged_user'] : null;
$role = strtolower($loggedUser['role'] ?? 'guest'); // Default to guest
$search = $_GET['search'] ?? '';
?>

<?php if ($role === 'admin'): ?>
<!-- ADMIN HEADER -->
<header class="bg-mabook-primary border-b border-mabook-midtone py-1 shadow-xl">
    <div class="w-11/12 max-w-[1200px] mx-auto">
        <div class="flex items-center justify-between gap-2 p-3">
            <!-- Logo Section -->
            <div class="flex items-center gap-3">
                <div class="text-mabook-midtone text-5xl"><i class="fas fa-book-open"></i></div>
                <a href="<?= url('admin/dashboard.php') ?>" class="block font-unifraktur text-mabook-light text-5xl">
                    Maboo<span class="font-crimson">k</span>
                </a>
            </div>

            <!-- Navigation Menu -->
            
            <!-- User Section -->
            <div class="flex gap-2 items-center justify-center">
                <div class="text-mabook-light text-sm italic">Halo, Admin</div>
                <a href="<?= url('logout.php') ?>" class="font-crimson text-mabook-light border border-mabook-light px-3 py-2 text-lg rounded-xl hover:bg-mabook-midtone/25 transition-colors">
                    Logout
                </a>
            </div>
        </div>
    </div>
</header>

<?php elseif ($role === 'user'): ?>
<!-- USER HEADER -->
<header x-data="{ dropdownOpen: false, mobileMenuOpen: false }" class="bg-mabook-primary border-b border-mabook-midtone shadow-xl sticky top-0 z-50">
    <div class="w-11/12 max-w-[1200px] mx-auto">
        <div class="flex flex-wrap md:flex-nowrap items-center justify-between gap-4 py-3">
            
            <!-- LEFT: Logo + Hi -->
            <div class="flex items-center gap-4">
                <a href="<?= url('index.php') ?>" class="flex items-center gap-3">
                    <i class="fas fa-book-open text-3xl text-mabook-midtone"></i>
                    <span class="text-3xl font-unifraktur text-mabook-light hover:text-mabook-midtone transition">
                        Maboo<span class="font-crimson">k</span>
                    </span>
                </a>
                <span class="text-mabook-light/80 font-crimson text-sm hidden md:inline">
                    👋 Hi, <?= htmlspecialchars($loggedUser['name'] ?? 'User') ?>
                </span>
            </div>

            <!-- CENTER: Navigation Menu -->
            <nav class="flex flex-wrap items-center gap-3 text-mabook-light font-crimson text-sm md:text-base">
                <?php
                $menus = [
                    ['label' => 'Beranda', 'href' => 'index.php', 'icon' => 'home'],
                    ['label' => 'Kategori', 'href' => 'user/kategori.php', 'icon' => 'tags'],
                    ['label' => 'Koleksi', 'href' => 'collection.php', 'icon' => 'book'],
                    ['label' => 'Favoritku', 'href' => 'user/favoritku.php', 'icon' => 'heart']
                ];
                foreach ($menus as $menu): ?>
                    <a href="<?= url($menu['href']) ?>"
                       class="flex items-center gap-2 px-3 py-2 rounded hover:bg-mabook-midtone/20 transition">
                        <i class="fas fa-<?= $menu['icon'] ?>"></i>
                        <span><?= $menu['label'] ?></span>
                    </a>
                <?php endforeach; ?>
            </nav>

            <!-- RIGHT: Search + Profile -->
            <div class="flex items-center gap-3 w-full md:w-auto">
                <!-- Search -->
                <form action="<?= url('collection.php') ?>" method="GET" class="flex-grow md:flex-grow-0">
                    <div class="flex items-center bg-mabook-dark/50 rounded-full border border-mabook-midtone/30 hover:border-mabook-midtone/50 transition">
                        <button type="submit" class="text-mabook-midtone p-2 pl-3 hover:text-mabook-light transition">
                            <i class="fas fa-search"></i>
                        </button>
                        <input name="search" value="<?= htmlspecialchars($search) ?>" type="text"
                               class="bg-transparent p-2 text-mabook-light font-crimson w-full md:w-48 placeholder-mabook-midtone/75 focus:outline-none rounded-r-full"
                               placeholder="Cari buku...">
                    </div>
                </form>

                <!-- Profile Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center gap-2 text-mabook-light hover:text-mabook-midtone">
                        <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-mabook-midtone">
                            <?php if (!empty($loggedUser['profile_picture'])): ?>
                                <img src="<?= url('uploads/profiles/' . htmlspecialchars($loggedUser['profile_picture'])) ?>" class="w-full h-full object-cover" alt="Foto">
                            <?php else: ?>
                                <div class="w-full h-full bg-mabook-midtone flex items-center justify-center">
                                    <i class="fas fa-user text-mabook-light text-lg"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.away="open = false"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:leave="transition ease-in duration-75"
                         class="absolute right-0 mt-2 w-56 bg-mabook-dark border border-mabook-midtone/30 rounded-lg shadow-lg py-1 z-50 origin-top-right backdrop-blur-sm">
                        <div class="px-4 py-3 border-b border-mabook-midtone/20">
                            <p class="text-sm font-medium text-mabook-light"><?= htmlspecialchars($loggedUser['name']) ?></p>
                            <p class="text-xs text-mabook-midtone/80 truncate"><?= htmlspecialchars($loggedUser['email']) ?></p>
                        </div>
                        <a href="<?= url('profile.php') ?>" class="block px-4 py-2 text-sm text-mabook-light hover:bg-mabook-midtone/10 flex items-center gap-2">
                            <i class="fas fa-user-circle w-4"></i> Profil Saya
                        </a>
                        <a href="<?= url('edit-profile.php') ?>" class="block px-4 py-2 text-sm text-mabook-light hover:bg-mabook-midtone/10 flex items-center gap-2">
                            <i class="fas fa-user-edit w-4"></i> Edit Profil
                        </a>
                        <div class="border-t border-mabook-midtone/20 my-1"></div>
                        <a href="<?= url('logout.php') ?>" class="block px-4 py-2 text-sm text-red-400 hover:bg-red-900/10 flex items-center gap-2">
                            <i class="fas fa-sign-out-alt w-4"></i> Keluar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


<?php else: ?>
<!-- GUEST HEADER (NOT LOGGED IN) -->
<header class="bg-mabook-primary border-b border-mabook-midtone py-1 shadow-xl">
    <div class="w-11/12 max-w-[1200px] mx-auto">
        <div class="flex items-center justify-between gap-2 p-3">
            <!-- Logo Section -->
            <div class="flex items-center gap-3">
                <div class="text-mabook-midtone text-5xl"><i class="fas fa-book-open"></i></div>
                <a href="<?= url('index.php') ?>" class="block font-unifraktur text-mabook-light text-5xl">
                    Mabook<span class="font-crimson">k</span>
                </a>
            </div>

 <!-- CENTER: Navigation Menu -->
            <nav class="flex flex-wrap items-center gap-3 text-mabook-light font-crimson text-sm md:text-base">
                <?php
                $menus = [
                    ['label' => 'Beranda', 'href' => 'login.php', 'icon' => 'home'],
                    ['label' => 'Kategori', 'href' => 'login.php', 'icon' => 'tags'],
                    ['label' => 'Koleksi', 'href' => 'login.php', 'icon' => 'book'],
                    ['label' => 'Favoritku', 'href' => 'login.php', 'icon' => 'heart']
                ];
                foreach ($menus as $menu): ?>
                    <a href="<?= url($menu['href']) ?>"
                       class="flex items-center gap-2 px-3 py-2 rounded hover:bg-mabook-midtone/20 transition">
                        <i class="fas fa-<?= $menu['icon'] ?>"></i>
                        <span><?= $menu['label'] ?></span>
                    </a>
                <?php endforeach; ?>
            </nav>

            <!-- RIGHT: Search + Profile -->
            <div class="flex items-center gap-3 w-full md:w-auto">
                <!-- Search -->
                <form action="<?= url('collection.php') ?>" method="GET" class="flex-grow md:flex-grow-0">
                    <div class="flex items-center bg-mabook-dark/50 rounded-full border border-mabook-midtone/30 hover:border-mabook-midtone/50 transition">
                        <button type="submit" class="text-mabook-midtone p-2 pl-3 hover:text-mabook-light transition">
                            <i class="fas fa-search"></i>
                        </button>
                        <input name="search" value="<?= htmlspecialchars($search) ?>" type="text"
                               class="bg-transparent p-2 text-mabook-light font-crimson w-full md:w-48 placeholder-mabook-midtone/75 focus:outline-none rounded-r-full"
                               placeholder="Cari buku...">
                    </div>
                </form>

            <!-- Auth Buttons -->
            <div class="flex gap-2 items-center justify-center">
                <a 
                    href="<?= url('login.php') ?>" 
                    class="font-crimson text-mabook-light border border-mabook-light px-3 py-2 text-lg rounded-xl hover:bg-mabook-midtone/25 transition-colors"
                >
                    Login
                </a>
                <a 
                    href="<?= url('register.php') ?>" 
                    class="font-crimson text-mabook-light border border-mabook-light px-3 py-2 text-lg rounded-xl hover:bg-mabook-midtone/25 transition-colors"
                >
                    Register
                </a>
            </div>
        </div>
    </div>
</header>
<?php endif; ?>