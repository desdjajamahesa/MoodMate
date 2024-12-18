<?php
header('Content-Type: application/json');

$targetDir = "../../src/assets/uploads/";
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

// Cek jika file diunggah
if (!empty($_FILES['file']['name'])) {
    $fileName = basename($_FILES['file']['name']);
    $uniqueFileName = uniqid() . "_" . $fileName; // Hindari duplikat nama file
    $targetFilePath = $targetDir . $uniqueFileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Validasi jenis file
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    if (in_array(strtolower($fileType), $allowedTypes)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            // Berikan URL gambar dalam response
            $imageURL = "src/assets/uploads/" . $uniqueFileName;
            echo json_encode(['location' => $imageURL]);
            exit;
        } else {
            echo json_encode(['error' => 'Gagal mengunggah file']);
            http_response_code(500);
            exit;
        }
    } else {
        echo json_encode(['error' => 'Format file tidak didukung']);
        http_response_code(400);
        exit;
    }
} else {
    echo json_encode(['error' => 'Tidak ada file yang diunggah']);
    http_response_code(400);
    exit;
}
?>
