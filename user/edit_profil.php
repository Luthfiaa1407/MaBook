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

// Ambil data user dari database
$stmt = $conn->prepare("SELECT name, email, username FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    $_SESSION['error'] = "Data pengguna tidak ditemukan.";
    header("Location: profil.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $username = $_POST['username'] ?? '';

    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, username = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $email, $username, $userId);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Profil berhasil diperbarui.";
        header("Location: profil.php");
        exit;
    } else {
        $error = "Gagal memperbarui profil.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Profil | Mabook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="../src/output.css" />
</head>
<body class="min-h-screen flex flex-col justify-between bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B] text-white">
<?php require_once(__DIR__ . '/../include/header.php'); ?>

<main class="flex-1 w-full max-w-md mx-auto mt-12 pb-32">
  <div class="bg-mabook-primary rounded-lg shadow-lg p-8">
    <h2 class="text-white text-2xl text-center mb-6">Edit Profil</h2>

    <?php if (!empty($error)): ?>
      <p class="text-red-400 text-center mb-4 italic"><?= $error ?></p>
    <?php endif; ?>

    <form action="" method="POST" class="space-y-4">
      <div>
        <label class="block text-white mb-1">Nama Lengkap</label>
        <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required class="w-full px-4 py-2 bg-mabook-dark text-white rounded border border-mabook-midtone" />
      </div>
      <div>
        <label class="block text-white mb-1">Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required class="w-full px-4 py-2 bg-mabook-dark text-white rounded border border-mabook-midtone" />
      </div>
      <div>
        <label class="block text-white mb-1">Username</label>
        <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required class="w-full px-4 py-2 bg-mabook-dark text-white rounded border border-mabook-midtone" />
      </div>

      <div class="mt-6">
        <a href="profil.php" class="block text-center bg-gray-600 text-white py-2 rounded hover:bg-gray-700 mb-2">Batal</a>
        <button type="submit" class="block w-full bg-mabook-midtone text-white py-2 rounded hover:bg-mabook-accent transition">Simpan Perubahan</button>
      </div>
    </form>
  </div>
</main>

<?php require_once(__DIR__ . '/../include/footer.php'); ?>
</body>
</html>
