<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$user = $_SESSION['user'] ?? null;
$is_logged_in = isset($user);
$user_id = $is_logged_in ? $user['id'] : null;
$username = $is_logged_in ? $user['name'] : 'Guest';
$role = $is_logged_in ? strtolower($user['role']) : 'guest';

// Base URL yang dinamis
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$base_url = $protocol . $_SERVER['HTTP_HOST'] . '/mabook';

// Variabel untuk header
$isLoggedIn = $is_logged_in;
$loggedUser = $user;