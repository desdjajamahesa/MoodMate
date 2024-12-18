<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//   header("Location: ../login.php");
//   exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mood Tracker - MoodMate</title>
  <!-- ! LINK FAVICON WEB -->
  <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <!-- ! LINK BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- ! LINK SIDEBAR CSS -->
  <link rel="stylesheet" href="../src/style/sidebar.css" />
  <!-- ! LINK MOOD TRACKER CSS -->
  <link rel="stylesheet" href="../src/style/moodtracker.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- ! SIDEBAR OPEN CODE -->
      <?php include 'sidebar.php' ?>
      <!-- ! SIDEBAR END CODE -->

      <!-- ! MOOD TRACKER CONTENT OPEN CODE -->
      <div class="col-9 mood-tracker-wrapper">
        <div class="mood-tracker">
          <div class="header-content-mood-tracker text-start mt-5">
            <h4>MOOD TRACKER</h4>
            <hr class="divider">
          </div>
          <div class="main-content-mood-tracker d-flex flex-column align-items-center justify-content-center mt-4">
            <!-- ! GAMBAR MOOD OPEN CODE -->
            <div class="mood-image mb-3">
              <img id="moodImage" src="../src/assets/images/emotions/netral.png" alt="Netral Mood" class="img-fluid" width="150" height="150">
            </div>
            <!-- ! GAMBAR MOOD END CODE -->
            <!-- ! SLIDER CHOICE OPEN CODE -->
            <div class="mood-slider w-100 mb-3">
              <input type="range" id="moodRange" class="form-range" min="1" max="7" value="4" step="1">

            </div>
            <!-- ! SLIDER CHOICE END CODE -->
            <!-- DESKRIPSI MOOD OPEN CODE -->
            <div class="mood-description mb-3 text-center">
              <h6 id="moodText">Netral</h6>
            </div>
            <!-- DESKRIPSI MOOD END CODE -->
            <!-- NEXT PAGE OPEN CODE -->
            <div class="next-button">
              <button id="nextBtn" class="btn btn-primary px-5">Next</button>
            </div>
            <!-- NEXT PAGE END CODE -->
          </div>
        </div>
      </div>
      <!-- ! MOOD TRACKER CONTENT END CODE -->
    </div>
  </div>

  <!-- ! LINK BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="../src/js/moodtracker.js"></script>
</body>

</html>