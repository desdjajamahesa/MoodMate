<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "moodmate";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $content = mysqli_real_escape_string($conn, $_POST['journal_content']);

    $query = "INSERT INTO journal_entries (user_id, content, created_at) VALUES (?, ?, NOW())";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "is", $user_id, $content);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php?success=1");
    } else {
        echo "Gagal menyimpan jurnal.";
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
