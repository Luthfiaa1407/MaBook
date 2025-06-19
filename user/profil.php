<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../functions/helper.php');

if (session_status() === PHP_SESSION_NONE) session_start();

// Redirect jika belum login
if (!isset($_SESSION['logged_user'])) {
    header("Location: ../login.php");
    exit;
}

$user_id = $_SESSION['logged_user'];

// Ambil data user
$stmt = $conn->prepare("SELECT name, email, username FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    $user = ['name' => '', 'email' => '', 'username' => ''];
}

// Proses jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];

    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, username = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $email, $username, $user_id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Profil berhasil diperbarui.";
        header("Location: profile.php");
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
<body class="min-h-screen flex flex-col bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B] text-white">
<?php require_once(__DIR__ . '/../include/header.php'); ?>

<main class="flex-1 w-11/12 max-w-3xl mx-auto mt-12 pb-24">
  <h1 class="text-center font-unifraktur text-mabook-light text-4xl mb-8">Edit Profil</h1>

  <?php if (!empty($error)): ?>
    <p class="text-red-400 text-center mb-4 italic"><?= $error ?></p>
  <?php endif; ?>

  <form action="" method="POST" class="bg-mabook-primary p-6 rounded-lg shadow-lg space-y-4">
    <div>
      <label class="block mb-1">Nama Lengkap</label>
      <input type="text" name="name" value="<?= htmlspecialchars($user['name'] ?? '') ?>" required class="w-full px-4 py-2 bg-mabook-dark text-white rounded" />
    </div>
    <div>
      <label class="block mb-1">Email</label>
      <input type="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" required class="w-full px-4 py-2 bg-mabook-dark text-white rounded" />
    </div>
    <div>
      <label class="block mb-1">Username</label>
      <input type="text" name="username" value="<?= htmlspecialchars($user['username'] ?? '') ?>" required class="w-full px-4 py-2 bg-mabook-dark text-white rounded" />
    </div>

    <div class="flex justify-end gap-4">
      <a href="../index.php" class="px-4 py-2 rounded bg-gray-600 text-white hover:bg-gray-700">Batal</a>
      <button type="submit" class="px-6 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-400">
        Simpan Perubahan
      </button>
    </div>
  </form>
</main>

<?php require_once(__DIR__ . '/../include/footer.php'); ?>
</body>
</html>
