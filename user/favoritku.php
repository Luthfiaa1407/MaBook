<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../functions/helper.php');

$userId = $_SESSION['logged_user'] ?? null;

if (!$userId) {
    header("Location: ../login.php");
    exit;
}

$query = "SELECT b.id, b.title, b.cover, b.description 
          FROM favorites f 
          JOIN books b ON f.book_id = b.id 
          WHERE f.user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$favorites = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Favoritku | Mabook</title>

<!-- Font Awesome & Tailwind output -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="../src/output.css" />
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B] min-h-screen flex flex-col">
    <?php require_once(__DIR__ . '/../include/header.php'); ?>

    <main class="w-11/12 max-w-[1200px] mx-auto mt-12 flex-1">
        <h1 class="font-unifraktur text-mabook-light text-5xl font-bold text-center">
            Daftar Favorit<span class="font-crimson">ku</span>
        </h1>
        <div class="h-[2px] w-48 bg-mabook-midtone mx-auto mt-4 mb-12"></div>

        <?php if (count($favorites) > 0): ?>
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($favorites as $fav): ?>
                <article class="text-mabook-light flex flex-col p-6 border border-mabook-midtone/25 gap-4 bg-mabook-primary rounded-xl shadow-lg font-crimson">
                    <img src="<?= htmlspecialchars($fav['cover']) ?>" alt="Cover Buku" class="h-48 w-full object-cover rounded-md" />
                    <h2 class="text-2xl font-bold mt-2"><?= htmlspecialchars($fav['title']) ?></h2>
                    <p class="text-sm"><?= htmlspecialchars(mb_strimwidth($fav['description'], 0, 150, "...")) ?></p>
                    <a href="../baca.php?id=<?= $fav['id'] ?>" class="mt-auto inline-flex items-center gap-1 text-mabook-midtone hover:underline">
                        <i class="fas fa-book-open-reader"></i> Baca Sekarang
                    </a>
                </article>
                <?php endforeach; ?>
            </section>
        <?php else: ?>
            <p class="text-center text-mabook-light mt-20">Anda belum menambahkan apa pun ke daftar favorit.</p>
        <?php endif; ?>
    </main>

    <?php require_once(__DIR__ . '/../include/footer.php'); ?>
</body>
</html>