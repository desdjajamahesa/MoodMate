<?php
session_start();
session_destroy();
require_once 'includes/config.php'; // Sertakan konfigurasi path global

header("Location: " . BASE_URL . "index.php"); // Redirect ke index.php
exit();
?>
