<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mood Tracker - MoodMate</title>
  <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../src/style/sidebar.css" />
  <link rel="stylesheet" href="../src/style/moodtracker.css" />
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- SIDEBAR -->
      <?php include 'sidebar.php'; ?>

      <!-- MOOD TRACKER CONTENT -->
      <div class="col-9 mood-tracker-wrapper d-flex justify-content-center align-items-center m-auto">
        <div class="mood-tracker p-4">
          <!-- Header -->
          <div class="header-content text-center mb-4">
            <h2 class="fw-bold text-dark">Perasaan apa yang menemani kamu hari ini?</h2>
          </div>

          <!-- Mood Image -->
          <div class="mood-circle mx-auto mb-4">
            <img id="moodImage" src="../src/assets/images/emotions/netral.png" alt="Mood" class="img-fluid">
          </div>

          <!-- Slider -->
          <div class="mood-slider mb-4">
            <input type="range" id="moodRange" class="form-range" min="1" max="7" value="4">
            <div class="d-flex justify-content-between px-2">
              <span class="slider-label text-muted">Sangat Tidak Senang</span>
              <span class="slider-label text-muted">Sangat Senang</span>
            </div>
          </div>

          <!-- Mood Description -->
          <div class="mood-description text-center mb-4">
            <h4 id="moodText" class="fw-semibold">Netral</h4>
          </div>

          <!-- Next Button -->
          <div class="text-center">
            <button id="nextBtn" class="btn btn-primary rounded-pill px-4 py-2">Next</button>
          </div>

          <!-- Riwayat Button -->
          <!-- <div class="text-center">
            <button id="riwayatBtn" class="btn btn-primary rounded-pill px-4 py-2">Cek Data Mood Kamu</button>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- LINK BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../src/js/moodtracker.js"></script>
</body>
</html>