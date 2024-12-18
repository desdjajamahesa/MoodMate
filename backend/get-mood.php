<?php
session_start();
include 'includes/db_config.php';

$user_id = $_SESSION['user_id'];
$query = "SELECT mood_value, mood_options, activities, timestamp 
          FROM mood_tracking WHERE user_id = ? ORDER BY timestamp DESC";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode($data);
$stmt->close();
$conn->close();
