<?php
session_start();

// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "moodmate";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo json_encode(['success' => false, 'error' => 'Database connection failed']);
    exit();
}

// Ambil payload JSON dari frontend
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(['success' => false, 'error' => 'Invalid JSON payload']);
    exit();
}

// Ambil variabel dari payload
$user_id = $_SESSION['user_id'] ?? 0; // Jika user_id tidak ada, gunakan default 0
$mood_value = $data['mood_value'] ?? null;
$mood_options = $data['mood_options'] ?? '';
$activities = $data['activities'] ?? '';
$persons = $data['persons'] ?? '';

// Validasi input
if (!$mood_value || $user_id == 0) {
    echo json_encode(['success' => false, 'error' => 'Mood value or user ID is missing']);
    exit();
}

// Simpan ke database
$query = "INSERT INTO mood_tracker (user_id, mood_value, mood_options, activities, persons, timestamp)
          VALUES (?, ?, ?, ?, ?, NOW())";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "iisss", $user_id, $mood_value, $mood_options, $activities, $persons);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(['success' => true, 'message' => 'Mood saved successfully']);
} else {
    echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
