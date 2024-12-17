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

// Periksa apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Journal - MoodMate</title>
    <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/style/sidebar.css" />
    <link rel="stylesheet" href="../src/style/journal.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'sidebar.php'; ?>

            <!-- Journal Content -->
            <div class="col-9 d-flex">
                <div class="journal-wrapper col-8">
                    <h4 class="mb-4">JOURNAL - Selamat datang, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h4>
                    <form id="journalForm" data-user-id="<?php echo $_SESSION['user_id']; ?>">
                        <textarea class="form-control mb-3" id="journalEntry" placeholder="Tulis catatanmu di sini..." rows="5"></textarea>
                        <button type="submit" class="btn btn-primary">Simpan Catatan</button>
                    </form>
                </div>

                <!-- Journal History -->
                <div class="journal-history col-4">
                    <h5>Journal History</h5>
                    <ul id="journalHistory" class="list-group">
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT content, created_at FROM journals WHERE user_id = ? ORDER BY created_at DESC";
                        $stmt = mysqli_prepare($conn, $query);
                        mysqli_stmt_bind_param($stmt, "i", $user_id);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<li class="list-group-item">';
                                echo '<strong>' . date('d M Y, H:i', strtotime($row['created_at'])) . ':</strong> ';
                                echo htmlspecialchars($row['content']);
                                echo '</li>';
                            }
                        } else {
                            echo '<li class="list-group-item text-muted text-center">Belum ada catatan jurnal</li>';
                        }
                        mysqli_stmt_close($stmt);
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="../src/js/journal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
