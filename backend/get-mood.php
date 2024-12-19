<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "moodmate";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo json_encode(['error' => 'Database connection failed']);
    exit();
}

$user_id = $_SESSION['user_id'] ?? 0;

$query = "SELECT mood_value, mood_options, activities, persons, timestamp 
          FROM mood_tracker 
          WHERE user_id = ?
          ORDER BY timestamp DESC";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
