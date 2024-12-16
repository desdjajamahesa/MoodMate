<?php
session_start();
include 'includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $birth_date = $_POST['birth_date'] ?? '';

    // Validasi input kosong
    if (empty($name) || empty($email) || empty($password) || empty($birth_date)) {
        header("Location: ../frontend/register.php?error=empty");
        exit();
    }

    // Cek apakah email sudah digunakan
    $checkQuery = "SELECT email FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $checkQuery);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        // Email sudah ada di database
        header("Location: ../frontend/register.php?error=email_taken");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan data ke database
    $query = "INSERT INTO users (name, email, password, birth_date) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashed_password, $birth_date);

    if (mysqli_stmt_execute($stmt)) {
        // Registrasi berhasil, arahkan ke login dengan pesan sukses
        header("Location: ../frontend/login.php?register=success");
        exit();
    } else {
        // Jika terjadi kesalahan
        header("Location: ../frontend/register.php?error=server");
        exit();
    }
}
?>