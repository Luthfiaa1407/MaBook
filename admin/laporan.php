<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../functions/helper.php');

if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['logged_user'])) {
    header("Location: ../login.php");
    exit;
}

$result = $conn->query("SELECT c.*, u.name AS user_name FROM comments c
                        LEFT JOIN users u ON c.user_id = u.id
                        ORDER BY c.created_at DESC");

if (!$result) {
    die("Query error: " . $conn->error);
}

$comments = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Semua Laporan Masalah | Admin Mabook</title>
  <link rel="stylesheet" href="/mabook/src/output.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body class="bg-[#1A120B] text-white min-h-screen">
<?php require_once(__DIR__ . '/../include/header.php'); ?>

<div class="w-11/12 max-w-[1200px] mx-auto mt-12 flex items-start gap-4 relative">

  <!-- ✅ Include Sidebar Admin -->
  <?php require_once(__DIR__ . '/../include/admin-sidebar.php'); ?>

  <!-- ✅ Konten laporan -->
  <div class="w-full px-3">
    <h1 class="text-3xl font-unifraktur text-mabook-light mb-6">Laporan Masalah Pengguna</h1>

    <?php if (count($comments) > 0): ?>
      <div class="bg-mabook-primary p-6 rounded-lg shadow-md">
        <table class="w-full border-separate border-spacing-y-3">
          <thead class="text-sm text-mabook-midtone uppercase">
            <tr>
              <th>ID</th>
              <th>Pengguna</th>
              <th>ID Buku</th>
              <th>Komentar</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($comments as $c): ?>
              <tr class="bg-mabook-dark text-white">
                <td class="p-2"><?= $c['id'] ?></td>
                <td class="p-2"><?= htmlspecialchars($c['user_name'] ?? 'Tidak diketahui') ?></td>
                <td class="p-2"><?= $c['book_id'] ?></td>
                <td class="p-2"><?= htmlspecialchars($c['comment']) ?></td>
                <td class="p-2"><?= $c['created_at'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <p class="text-mabook-light mt-6">Belum ada laporan masuk.</p>
    <?php endif; ?>
  </div>
</div>

<?php require_once(__DIR__ . '/../include/footer.php'); ?>
</body>
</html>
