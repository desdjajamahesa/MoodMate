<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "moodmate";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['journalEntry'])) {
    $journalEntry = mysqli_real_escape_string($conn, $_POST['journalEntry']);
    $user_id = $_SESSION['user_id']; // Ambil ID user dari session

    // Query untuk menyimpan catatan jurnal
    $query = "INSERT INTO journals (user_id, content) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "is", $user_id, $journalEntry);

    if (mysqli_stmt_execute($stmt)) {
        // Jika berhasil, alihkan kembali ke halaman jurnal
        header("Location: journal.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

// Menutup koneksi database
mysqli_close($conn);
?>
