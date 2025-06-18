<?php
function url($path = '') {
    global $base_url;
    // Membersihkan path dari slash yang tidak perlu
    $clean_path = ltrim($path, '/');
    return rtrim($base_url, '/') . '/' . $clean_path;
}