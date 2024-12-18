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

// // Periksa apakah user sudah login
// if (!isset($_SESSION['user_id'])) {
//     header("Location: ../login.php");
//     exit();
// }
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
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/xbcylp9wkh20u9wzclqiyy82a0vvkoyiaph6nfmzedqxqhyd/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '#journalEntry',
        plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | removeformat | help',
        height: 300,
        images_upload_url: '../../backend/upload_image.php',
        images_upload_handler: function (blobInfo, success, failure) {
            let xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '../../backend/upload_image.php');

            xhr.onload = function () {
                if (xhr.status !== 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                let json;
                try {
                    json = JSON.parse(xhr.responseText);
                } catch (e) {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                if (!json || typeof json.location !== 'string') {
                    failure('Invalid response from server');
                    return;
                }

                success(json.location);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        }
    });
</script>
    <style>
        /* Mencegah scroll horizontal dan vertikal */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

       
        /* Sidebar agar tetap responsif */
        .sidebar {
            flex: 1;
            background-color: #f8f9fa;
            padding: 1rem;
            overflow-y: auto;
        }

        /* Konten utama */
        .main-content {
            flex: 2;
            padding: 1rem;
            overflow-y: auto;
        }

        .journal-wrapper, .journal-history {
            max-height: 80vh;
            overflow-y: auto;
        }

        /* Mengatur font dan layout agar lebih kecil */
        h4, h5 {
            font-size: 1rem;
        }

        button, textarea, .btn {
            font-size: 0.9rem;
        }

        textarea {
            height: 150px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'sidebar.php'; ?>

            <!-- Journal Content -->
            <div class="col-9 d-flex">
                <div class="journal-wrapper col-8">
                    <h4 class="mb-4">JOURNAL - Tuang perasaan dan moment mu disini, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h4>
                    <form method="POST" action="../../backend/save_journal.php">
        <textarea id="journalEntry" name="journal_content"></textarea>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
                </div>

<!-- Journal History -->
<div class=" col-4 mt-3">
    <button class="btn btn-primary w-100 text-start mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#journalHistoryCollapse" aria-expanded="false" aria-controls="journalHistoryCollapse">
        Lihat History Jurnal
    </button>
    <div class="collapse" id="journalHistoryCollapse">
        <h5>Journal History</h5>
        <div id="journalHistory">
            <?php
            $user_id = $_SESSION['user_id'];
            $query = "SELECT id, content, created_at FROM journal_entries WHERE user_id = ? ORDER BY created_at DESC";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "i", $user_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $journalId = $row['id'];
                    echo '<button class="btn btn-primary w-100 text-start mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJournal' . $journalId . '" aria-expanded="false" aria-controls="collapseJournal' . $journalId . '">';

                    echo '<strong>' . date('d M Y, H:i', strtotime($row['created_at'])) . '</strong>';
                    echo '</button>';
                    echo '<div class="collapse" id="collapseJournal' . $journalId . '">';
                    echo '<div class="card card-body">';
                    echo htmlspecialchars($row['content']);
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="alert alert-info text-center">Belum ada catatan jurnal</div>';
            }
            mysqli_stmt_close($stmt);
            ?>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
