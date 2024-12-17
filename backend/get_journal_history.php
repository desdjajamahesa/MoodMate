<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include '../includes/db_config.php';  // Adjust path if needed

header('Content-Type: application/json');

// Function for logging debug information
function debugLog($message) {
    error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, 'debug_history.log');
}

// Check database connection
if (!$conn) {
    debugLog("Database Connection Failed: " . mysqli_connect_error());
    echo json_encode([
        'success' => false, 
        'message' => 'Koneksi database gagal',
        'error' => mysqli_connect_error()
    ]);
    exit();
}

// Check if user is logged in
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

// Query to fetch journal history
$query = "SELECT * FROM journals WHERE user_id = ? ORDER BY created_at DESC LIMIT 10";
$stmt = $conn->prepare($query);

if (!$stmt) {
    debugLog("Prepare statement failed: " . $conn->error);
    echo json_encode([
        'success' => false, 
        'message' => 'Gagal menyiapkan query',
        'error' => $conn->error
    ]);
    exit();
}

$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if (!$result) {
    debugLog("Fetch failed: " . $conn->error);
    echo json_encode([
        'success' => false, 
        'message' => 'Gagal mengambil jurnal',
        'error' => $conn->error
    ]);
    exit();
}

$journals = [];
while ($row = $result->fetch_assoc()) {
    $journals[] = [
        'id' => $row['id'],
        'content' => $row['content'],
        'created_at' => $row['created_at']
    ];
}

debugLog("Journals Found: " . count($journals));

echo json_encode([
    'success' => true, 
    'journals' => $journals
]);

$stmt->close();
$conn->close();
exit();