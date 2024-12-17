<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'includes/db_config.php';

header('Content-Type: application/json');

// Log untuk debug
function debugLog($message) {
    error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, 'debug.log');
}

debugLog("Save Journal Script Started");

// Cek koneksi database
if (!$conn) {
    debugLog("Database Connection Failed: " . mysqli_connect_error());
    echo json_encode([
        'success' => false, 
        'message' => 'Koneksi database gagal',
        'error' => mysqli_connect_error()
    ]);
    exit();
}

// Cek session
debugLog("Session User ID: " . ($_SESSION['user_id'] ?? 'NOT SET'));

if (!isset($_SESSION['user_id'])) {
    debugLog("User not authenticated");
    echo json_encode([
        'success' => false, 
        'message' => 'Anda belum login'
    ]);
    exit();
}

// Tangani POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    $entry = $_POST['entry'] ?? '';

    debugLog("Received Entry: " . $entry);
    debugLog("User ID: " . $userId);

    // Validasi input
    if (empty($entry)) {
        debugLog("Entry is empty");
        echo json_encode([
            'success' => false, 
            'message' => 'Jurnal tidak boleh kosong'
        ]);
        exit();
    }

    // Persiapkan query
    $query = "INSERT INTO journals (user_id, content, created_at) VALUES (?, ?, NOW())";
    $stmt = mysqli_prepare($conn, $query);
    
    if (!$stmt) {
        debugLog("Prepare statement failed: " . mysqli_error($conn));
        echo json_encode([
            'success' => false, 
            'message' => 'Gagal menyiapkan query',
            'error' => mysqli_error($conn)
        ]);
        exit();
    }

    mysqli_stmt_bind_param($stmt, "is", $userId, $entry);
    
    if (mysqli_stmt_execute($stmt)) {
        debugLog("Journal entry saved successfully");
        echo json_encode([
            'success' => true, 
            'message' => 'Jurnal berhasil disimpan'
        ]);
    } else {
        debugLog("Execute failed: " . mysqli_stmt_error($stmt));
        echo json_encode([
            'success' => false, 
            'message' => 'Gagal menyimpan jurnal',
            'error' => mysqli_stmt_error($stmt)
        ]);
    }
    
    mysqli_stmt_close($stmt);
    exit();
}

debugLog("Script end without processing");
exit();