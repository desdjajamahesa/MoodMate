<?php
header("Content-Type: application/json");
session_start();

// Database connection
require_once '../includes/db_config.php';

// Ambil data JSON dari frontend
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['user_id'], $data['mood_value'], $data['mood_options'], $data['activities'])) {
    $user_id = intval($data['user_id']);
    $mood_value = intval($data['mood_value']);
    $mood_options = htmlspecialchars($data['mood_options']);
    $activities = htmlspecialchars($data['activities']);

    // Query SQL untuk menyimpan data
    $query = "INSERT INTO mood_tracker (user_id, mood_value, mood_options, activities) 
              VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("iiss", $user_id, $mood_value, $mood_options, $activities);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Data berhasil disimpan"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal menyimpan data"]);
    }
    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Data tidak lengkap"]);
}
$conn->close();
