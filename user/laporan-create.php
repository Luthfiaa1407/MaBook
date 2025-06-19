<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../functions/helper.php');

if (session_status() === PHP_SESSION_NONE) session_start();

$userId = $_SESSION['logged_user'] ?? null;
if (!$userId) {
    header("Location: ../login.php");
    exit;
}

// Ambil data buku untuk dropdown
$booksResult = $conn->query("SELECT id, title FROM books ORDER BY title ASC");
$books = $booksResult ? $booksResult->fetch_all(MYSQLI_ASSOC) : [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $book_id = $_POST['book_id'] ?? '';
    $comment = $_POST['comment'] ?? '';
    $_SESSION['old'] = $_POST;

    // Validasi
    if (empty($book_id)) $errors['book_id'] = "ID Buku tidak boleh kosong";
    if (empty($comment)) $errors['comment'] = "Komentar tidak boleh kosong";

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: laporan-create.php');
        exit;
    }

    // Simpan ke tabel `comments`
    $stmt = $conn->prepare("INSERT INTO comments (comment, book_id, user_id, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sii", $comment, $book_id, $userId);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Laporan berhasil dikirim!";
        header('Location: ../index.php');
        exit;
    } else {
        $_SESSION['error'] = "Gagal mengirim komentar: " . $conn->error;
        header('Location: laporan-create.php');
    }
    exit;
}

$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['errors'], $_SESSION['old']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Laporan | Mabook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/mabook/src/output.css">
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B]">
<?php require_once(__DIR__ . '/../include/header.php'); ?>

<div class="w-11/12 max-w-[800px] mx-auto mt-12 relative">
  <div>
    <div class="font-crimson text-mabook-light flex justify-between items-center">
      <div class="text-3xl">Laporkan Masalah Buku</div>
      <a href="laporan.php" class="bg-mabook-midtone text-white/80 py-2 px-4 rounded-xl duration-200 hover:-translate-y-0.5 active:translate-y-1">
        <div class="flex gap-2 items-center font-semibold">
          <i class="fas fa-chevron-left"></i>
          Kembali
        </div>
      </a>
    </div>

    <div class="bg-mabook-primary w-full p-5 mt-3 rounded-lg shadow-md">
      <form action="laporan-create.php" method="POST">
        <div class="mb-3">
          <label for="book_id" class="mabook-label">Judul Buku</label>
          <select id="book_id" name="book_id" class="mabook-form-control">
            <option value="">-- Pilih Judul Buku --</option>
            <?php foreach ($books as $book): ?>
              <option value="<?= $book['id'] ?>" <?= ($old['book_id'] ?? '') == $book['id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($book['title']) ?>
              </option>
            <?php endforeach; ?>
          </select>
          <?php if (isset($errors['book_id'])): ?>
            <span class="italic text-sm text-red-400"><?= $errors['book_id'] ?></span>
          <?php endif; ?>
        </div>

        <div class="mb-3">
          <label for="comment" class="mabook-label">Komentar</label>
          <textarea name="comment" id="comment" class="mabook-form-control" placeholder="Jelaskan masalah buku..."><?= htmlspecialchars($old['comment'] ?? '') ?></textarea>
          <?php if (isset($errors['comment'])): ?>
            <span class="italic text-sm text-red-400"><?= $errors['comment'] ?></span>
          <?php endif; ?>
        </div>

        <button type="submit" class="mabook-btn-primary mt-3">Kirim Laporan</button>

        <?php if (isset($_SESSION['error'])): ?>
          <div class="p-3 text-red-400 italic text-center"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
      </form>
    </div>
  </div>
</div>

<?php require_once(__DIR__ . '/../include/footer.php'); ?>
</body>
</html>