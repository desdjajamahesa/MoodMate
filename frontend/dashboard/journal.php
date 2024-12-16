<?php
session_start();
if (!isset($_SESSION['user'])) {
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
  <!-- ! LINK FAVICON WEB -->
  <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <!-- ! LINK BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- ! LINK SIDEBAR CSS -->
  <link rel="stylesheet" href="../src/style/sidebar.css" />
  <!-- ! LINK MOOD TRACKER CSS -->
  <link rel="stylesheet" href="../src/style/journal.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- ! SIDEBAR OPEN CODE -->
      <?php include 'sidebar.php' ?>
      <!-- ! SIDEBAR END CODE -->

      <!-- ! JOURNAL CONTENT OPEN CODE -->
      <div class="col-9 journal-wrapper">
        <div class="journal">
          <div class="header-content-journal text-end mt-5">
            <h4>JOURNAL</h4>
          </div>
          <div class="main-content-journal mt-4">
            <form id="journalForm">
              <div class="mb-3">
                <label for="journalEntry" class="form-label">Catatan Hari ini</label>
                <textarea class="form-control" id="journalEntry" rows="10" placeholder="Write your thoughts here..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Simpan Catatan</button>
            </form>
            <div class="mt-5">
              <h5>Journal History</h5>
              <ul id="journalHistory" class="list-group">
                <!-- Journal entries will be dynamically added here -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- ! JOURNAL CONTENT END CODE -->
    </div>
  </div>

  <!-- ... (keep the existing script tags) ... -->
  <script src="../src/js/journal.js"></script>
  <!-- ! LINK BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>