<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include '../includes/db_config.php';  // Pastikan path benar

header('Content-Type: application/json');

// Fungsi log debug
function debugLog($message) {
    error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, 'debug_save.log');
}

// Cek koneksi database
if (!$conn) {
    debugLog("Koneksi Database Gagal: " . mysqli_connect_error());
    echo json_encode([
        'success' => false, 
        'message' => 'Koneksi database gagal: ' . mysqli_connect_error()
    ]);
    exit();
}

// Cek session
if (!isset($_SESSION['user_id'])) {
    debugLog("Pengguna tidak terautentikasi");
    echo json_encode([
        'success' => false, 
        'message' => 'Anda belum login'
    ]);
    exit();
}

// Tangani POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    
    // Debug: Tampilkan semua input POST
    debugLog("POST Data: " . print_r($_POST, true));
    
    // Gunakan $_POST['entry'] dengan trim
    $entry = isset($_POST['entry']) ? trim($_POST['entry']) : '';

    debugLog("Entri Jurnal Diterima: " . $entry);
    debugLog("ID Pengguna: " . $userId);

    // Validasi input
    if (empty($entry)) {
        debugLog("Entri kosong");
        echo json_encode([
            'success' => false, 
            'message' => 'Jurnal tidak boleh kosong'
        ]);
        exit();
    }

    // Persiapkan query
    $query = "INSERT INTO journals (user_id, content, created_at) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($query);
    
    if (!$stmt) {
        debugLog("Gagal mempersiapkan pernyataan: " . $conn->error);
        echo json_encode([
            'success' => false, 
            'message' => 'Gagal menyiapkan query: ' . $conn->error
        ]);
        exit();
    }

    $stmt->bind_param("is", $userId, $entry);
    
    if ($stmt->execute()) {
        debugLog("Entri jurnal berhasil disimpan");
        echo json_encode([
            'success' => true, 
            'message' => 'Jurnal berhasil disimpan'
        ]);
    } else {
        debugLog("Gagal mengeksekusi: " . $stmt->error);
        echo json_encode([
            'success' => false, 
            'message' => 'Gagal menyimpan jurnal: ' . $stmt->error
        ]);
    }
    
    $stmt->close();
    $conn->close();
    exit();
}

debugLog("Metode request tidak valid");
echo json_encode([
    'success' => false, 
    'message' => 'Metode request tidak valid'
]);
exit();