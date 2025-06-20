<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include necessary files
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../functions/helper.php');

// Debug: Check if user_id is set
$userId = $_SESSION['logged_user']['id'] ?? null;
if ($userId === null) {
    error_log("User ID is null in favoritku.php");
    header("Location: ../login.php");
    exit;
} else {
    error_log("User ID found: $userId in favoritku.php");
}

// Handle delete request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete_favorite') {
    $bookId = $_POST['book_id'] ?? null;
    if ($bookId && $userId) {
        $stmt = $conn->prepare("DELETE FROM favorites WHERE user_id = ? AND book_id = ?");
        if ($stmt) {
            $stmt->bind_param("ii", $userId, $bookId);
            $stmt->execute();
            $stmt->close();
            // Redirect to refresh the page
            header("Location: favoritku.php");
            exit;
        } else {
            error_log("Delete prepare failed: " . $conn->error);
        }
    }
}

// Fetch favorites
$query = "SELECT b.id, b.title, b.cover, b.description 
          FROM favorites f 
          JOIN books b ON f.book_id = b.id 
          WHERE f.user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$favorites = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
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
        <section class="grid grid-cols-4 gap-8">
          <?php foreach ($favorites as $fav): ?>
            <div class="group relative">
              <a href="../baca.php?id=<?= $fav['id'] ?>" class="block">
                <div class="group-hover:-translate-y-1 duration-200 text-mabook-light h-full flex flex-col items-start justify-start p-4 border border-mabook-midtone/25 gap-5 bg-mabook-primary relative rounded-xl overflow-hidden font-crimson">
                  <img
                    src="<?= htmlspecialchars('../' . ltrim($fav['cover'], '/')) ?>"
                    alt="Cover Buku <?= htmlspecialchars($fav['title']) ?>"
                    class="w-full"
                    onerror="this.src='../images/default-cover.jpg';"
                  />
                  <div class="flex flex-col gap-3">
                    <h2 class="text-3xl"><?= htmlspecialchars($fav['title']) ?></h2>
                    <div>
                      <p class="text-sm text-mabook-midtone mb-3">
                        <?= htmlspecialchars(mb_strimwidth($fav['description'], 0, 120, '...')) ?>
                      </p>
                    </div>
                  </div>
                  <span class="inline-block px-3 py-1 bg-mabook-midtone text-mabook-dark rounded hover:bg-mabook-light transition text-center mt-auto">
                    Baca Buku
                  </span>
                </div>
              </a>
              <form method="POST" style="display:inline; position: absolute; bottom: 10px; right: 10px;">
                <input type="hidden" name="book_id" value="<?= $fav['id'] ?>">
                <input type="hidden" name="action" value="delete_favorite">
                <button type="submit" class="inline-block px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition text-center">Hapus</button>
              </form>
            </div>
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