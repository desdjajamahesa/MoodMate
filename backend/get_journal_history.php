<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'includes/db_config.php';

header('Content-Type: application/json');

// Log untuk debug
function debugLog($message) {
    error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, 'debug_history.log');
}

debugLog("Get Journal History Script Started");

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

$userId = $_SESSION['user_id'];
debugLog("Fetching journals for User ID: " . $userId);

// Query untuk mengambil history jurnal
$query = "SELECT id, content, created_at FROM journals WHERE user_id = ? ORDER BY created_at DESC LIMIT 10";
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

mysqli_stmt_bind_param($stmt, "i", $userId);
$executeResult = mysqli_stmt_execute($stmt);

if (!$executeResult) {
    debugLog("Execute failed: " . mysqli_stmt_error($stmt));
    echo json_encode([
        'success' => false, 
        'message' => 'Gagal mengeksekusi query',
        'error' => mysqli_stmt_error($stmt)
    ]);
    exit();
}

$result = mysqli_stmt_get_result($stmt);

if (!$result) {
    debugLog("Get result failed: " . mysqli_error($conn));
    echo json_encode([
        'success' => false, 
        'message' => 'Gagal mendapatkan hasil',
        'error' => mysqli_error($conn)
    ]);
    exit();
}

$journals = [];
while ($row = mysqli_fetch_assoc($result)) {
    $journals[] = [
        'id' => $row['id'],
        'content' => $row['content'],
        'created_at' => $row['created_at']
    ];
}

debugLog("Journals Found: " . count($journals));

echo json_encode([
    'success' => true, 
    'journals' => $journals,
    'user_id' => $userId,
    'journal_count' => count($journals)
]);

mysqli_stmt_close($stmt);
exit();