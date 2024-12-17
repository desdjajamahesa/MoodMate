<?php
session_start();
header('Content-Type: application/json'); // Response JSON

// Pastikan user sudah login
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'error' => 'User tidak login']);
    exit();
}

// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "moodmate";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo json_encode(['success' => false, 'error' => 'Gagal terhubung ke database: ' . mysqli_connect_error()]);
    exit();
}

// Tangkap data POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $content = trim($_POST['content'] ?? '');
    $created_at = date('Y-m-d H:i:s');

    if (empty($content)) {
        echo json_encode(['success' => false, 'error' => 'Isi catatan tidak boleh kosong']);
        exit();
    }

    // Query untuk insert
    $query = "INSERT INTO journals (user_id, content, created_at) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "iss", $user_id, $content, $created_at);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['success' => true, 'message' => 'Catatan berhasil disimpan']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Gagal menyimpan catatan: ' . mysqli_error($conn)]);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
