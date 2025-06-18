<?php
require_once(__DIR__ . '/config/config.php');
require_once(__DIR__ . '/functions/guest.php');

// logout abis itu lempar ke login
logout();
header('Location: login.php');
