<?php
session_start();
require_once '../includes/config.php'; // Koneksi database

// Debug: Cek apakah user_id tersedia
if (!isset($_SESSION['user_id'])) {
    die('Session user_id tidak ditemukan! Pastikan Anda login terlebih dahulu.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'] ?? null; // Ambil user_id dari sesi
    $mood_scale = $_POST['mood_scale'] ?? '';
    $mood_description = $_POST['mood_description'] ?? '';
    $impact_factors = isset($_POST['impact_factors']) ? implode(", ", $_POST['impact_factors']) : '';

    // Validasi input
    if ($user_id && $mood_scale && $mood_description) {
        $query = "INSERT INTO mood_entries (user_id, mood_scale, mood_description, impact_factors) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "iiss", $user_id, $mood_scale, $mood_description, $impact_factors);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../frontend/dashboard/mood-tracker.php?status=success");
            exit();
        } else {
            header("Location: ../frontend/dashboard/mood-tracker.php?status=error");
            exit();
        }
    } else {
        header("Location: ../frontend/dashboard/mood-tracker.php?status=invalid");
        exit();
    }
}
?>
