<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../functions/helper.php');

$userId = $_SESSION['logged_user']['id'] ?? null;

if (!$userId) {
    header("Location: ../login.php");
    exit;
}

$query = "SELECT b.id, b.title, b.cover, b.description 
          FROM favorites f 
          JOIN books b ON f.book_id = b.id 
          WHERE f.user_id = ?";
$stmt  = $conn->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result    = $stmt->get_result();
$favorites = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Favoritku | Mabook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="../src/output.css" />
</head>

<body class="min-h-screen flex flex-col bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B] text-mabook-light font-crimson">
  <?php require_once(__DIR__ . '/../include/header.php'); ?>

  <main class="flex-1 py-12 px-6">
    <div class="w-11/12 max-w-[1200px] mx-auto">
      <h1 class="text-5xl font-unifraktur font-bold text-center mb-3">Daftar Favorit<span class="font-crimson">ku</span></h1>
      <p class="text-mabook-light/70 text-lg mb-10 text-center italic">
        Buku-buku yang kamu sukai akan tampil di sini.
      </p>

      <?php if ($favorites): ?>
        <section class="flex flex-wrap justify-center gap-6">
          <?php foreach ($favorites as $fav): ?>
            <a href="../baca.php?id=<?= $fav['id'] ?>" class="group">
              <div class="bg-mabook-dark rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition max-w-[280px] flex flex-col h-full">

                <!-- Kotak gambar: tinggi 256 px, lebar penuh -->
                <div class="w-full h-64 overflow-hidden">
                  <img
                    src="<?= htmlspecialchars('../' . ltrim($fav['cover'], '/')) ?>"
                    alt="Cover Buku <?= htmlspecialchars($fav['title']) ?>"
                    class="w-full h-full object-cover"  <!-- ganti object-cover ➜ object-contain kalau tak mau crop -->
                    onerror="this.src='../images/default-cover.jpg';"
                  />
                </div>

                <!-- Konten -->
                <div class="p-4 flex flex-col justify-between flex-grow h-[250px]">
                  <div>
                    <h2 class="text-xl font-bold mb-1"><?= htmlspecialchars($fav['title']) ?></h2>
                    <p class="text-sm text-mabook-midtone mb-3">
                      <?= htmlspecialchars(mb_strimwidth($fav['description'], 0, 120, '...')) ?>
                    </p>
                  </div>
                  <span class="inline-block px-3 py-1 bg-mabook-midtone text-mabook-dark rounded hover:bg-mabook-light transition text-center mt-auto">
                    Baca Buku
                  </span>
                </div>

              </div>
            </a>
          <?php endforeach; ?>
        </section>

        <div class="h-32 lg:h-40"></div>
      <?php else: ?>
        <p class="text-center mt-20">Anda belum menambahkan apa pun ke daftar favorit.</p>
      <?php endif; ?>
    </div>
  </main>

  <?php require_once(__DIR__ . '/../include/footer.php'); ?>
</body>
</html>
