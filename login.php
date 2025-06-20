<?php 
session_start();
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/functions/helper.php';
require_once __DIR__ . '/functions/guest.php';

// Check if user is already logged in
if (isset($_SESSION['logged_user'])) {
    $loggedUser = $_SESSION['logged_user'];
    
    // Set cache control headers to prevent caching
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    
    // Redirect based on role
    if ($loggedUser['role'] == 'ADMIN') {
        header('Location: admin/dashboard.php');
    } else {
        header('Location: index.php');
    }
    exit();
}

// Initialize variables
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
$error = $_SESSION['error'] ?? null;
$success = $_SESSION['success'] ?? null;

// Clear session messages after displaying them
unset($_SESSION['errors']);
unset($_SESSION['error']);
unset($_SESSION['success']);
unset($_SESSION['old']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];

    // Get input
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $_SESSION['old'] = $_POST;

    // Validation
    if (empty($username)) $errors['username'] = 'Username tidak boleh kosong';
    if (empty($password)) $errors['password'] = 'Password tidak boleh kosong';

    // Return errors if validation fails
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: login.php');
        exit;
    }

    // Attempt login
    $loggedUser = login($username, $username, $password);
    if ($loggedUser) {
        $_SESSION['logged_user'] = $loggedUser;
        
        // Regenerate session ID to prevent session fixation
        session_regenerate_id(true);
        
        // Set cache control headers
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        
        // Redirect based on role
        if ($loggedUser['role'] == 'ADMIN') {
            header('Location: admin/dashboard.php');
        } else {
            header('Location: index.php');
        }
        exit;
    } else {
        $_SESSION['error'] = "Username/email atau password salah.";
        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabook - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="src/output.css">
    <!-- Prevent caching -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B]">
    <div class="w-screen h-screen flex flex-col items-center justify-center gap-6">
        <div>
            <a href="index.php" class="block text-center font-unifraktur text-mabook-light text-6xl">Maboo<span class="font-crimson">k</span></a>
            <p class="font-crimson text-mabook-light">Selamat datang! Silahkan login terlebih dahulu</p>
        </div>
        <div class="justify-center p-8 bg-mabook-primary text-mabook-light shadow-2xl rounded-2xl w-11/12 lg:w-1/3">
            <?php if (isset($success)) : ?>
                <div class="p-3 bg-teal-400 text-mabook-primary rounded-xl font-crimson font-semibold flex gap-2 items-center">
                    <i class="fas fa-check"></i>
                    Registrasi berhasil, silahkan login
                </div>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
                <div class="p-3 bg-red-400 text-mabook-primary rounded-xl font-crimson font-semibold flex gap-2 items-center">
                    <i class="fas fa-exclamation-circle"></i>
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            <form action="#" method="POST">
                <input type="text" name="username" placeholder="Your email/username..." class="mabook-guest-input" value="<?= htmlspecialchars($old['username'] ?? '') ?>">
                <?php if (isset($errors['username'])) : ?>
                    <span class="text-sm text-red-400 italic"><?= htmlspecialchars($errors['username']) ?></span>
                <?php endif; ?>

                <input type="password" name="password" placeholder="Your password..." class="mabook-guest-input">
                <?php if (isset($errors['password'])) : ?>
                    <span class="text-sm text-red-400 italic"><?= htmlspecialchars($errors['password']) ?></span>
                <?php endif; ?>

                <button type="submit" class="block bg-mabook-midtone p-3 text-center w-full mt-4 font-crimson font-bold text-lg cursor-pointer active:translate-y-0.5 hover:bg-mabook-dark transition">Sign in</button>
            </form>
            <div class="italic text-sm text-center mt-2">Gapunya akun? Bikin dulu <a href="register.php" class="underline hover:text-mabook-midtone transition">disini</a>.</div>
        </div>
    </div>
    
    <script>
        // Prevent going back to login page after login
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        
        // Clear form data when page is refreshed
        if (performance.navigation.type == 1) {
            window.location.href = 'login.php';
        }
    </script>
</body>
</html>