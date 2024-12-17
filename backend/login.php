<?php
session_start();
include 'includes/db_config.php';

// Hanya menangani POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validasi input kosong
    if (empty($email) || empty($password)) {
        header("Location: ../frontend/login.php?error=empty");
        exit();
    }

    // Query ke database
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Store more user details in session for flexibility
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['name'];
            
            // Optional: Add a login timestamp
            $_SESSION['last_login'] = time();

            header("Location: ../frontend/dashboard/mood-tracker.php");
            exit();
        } else {
            header("Location: ../frontend/login.php?error=password");
            exit();
        }
    } else {
        header("Location: ../frontend/login.php?error=email");
        exit();
    }
}