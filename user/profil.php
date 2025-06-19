<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../functions/helper.php');

if (session_status() === PHP_SESSION_NONE) session_start();

$userData = $_SESSION['logged_user'] ?? null;
$userId = $userData['id'] ?? null;

if (!$userId) {
    header("Location: ../login.php");
    exit;
}

$stmt = $conn->prepare("SELECT name, email, username, role, created_at FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    $_SESSION['error'] = "Data pengguna tidak ditemukan.";
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profil Pengguna | Mabook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="../src/output.css">
</head>

<body class="bg-[#1A120B] bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')]">
<?php require_once(__DIR__ . '/../include/header.php'); ?>

<div class="w-full max-w-md mx-auto mt-12">
  <div class="bg-mabook-primary rounded-lg shadow-lg p-8 text-center">
    <img class="w-32 h-32 rounded-full mx-auto" src="https://placehold.co/200x200.png?text=Profile" alt="Foto Profil">
    <h2 class="text-white text-2xl mt-4"><?= htmlspecialchars($user['name']) ?></h2>
    <p class="text-mabook-light mt-1">Username: <?= htmlspecialchars($user['username']) ?></p>
    <div class="mt-4 text-sm text-gray-300">
      <p class="flex justify-center items-center gap-2"><i class="fas fa-envelope"></i> <?= htmlspecialchars($user['email']) ?></p>
      <p class="flex justify-center items-center gap-2 mt-2"><i class="fas fa-user-tag"></i> Role: <?= htmlspecialchars($user['role']) ?></p>
      <p class="flex justify-center items-center gap-2 mt-2"><i class="fas fa-calendar-alt"></i> Bergabung: <?= date('d M Y', strtotime($user['created_at'])) ?></p>
    </div>
    <div class="mt-6">
      <a href="edit_profil.php" class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white py-2 px-4 rounded-full hover:opacity-75 transition block w-full text-center">Edit Profil</a>
    </div>
  </div>
</div>

<?php require_once(__DIR__ . '/../include/footer.php'); ?>
</body>
</html>