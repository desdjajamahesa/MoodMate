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
  <title>Mental Health - MoodMate</title>
  <!-- ! LINK FAVICON WEB -->
  <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <!-- ! LINK BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- ! LINK SIDEBAR CSS -->
  <link rel="stylesheet" href="../src/style/sidebar.css" />
  <!-- ! LINK MOOD TRACKER CSS -->
  <link rel="stylesheet" href="../src/style/mentalheath.css" />
    
  <style>
    :root {
      --bg-primary: #97bcd6;
      --bg-secondary: #ffb4c0;
      --nav-color: #c3d8f7;
      --light-text: #f7f7f7;
      --dark-text: #a8c2e3;
    }

    body {
      background-color: var(--bg-primary);
      font-family: 'Arial', sans-serif;
    }

    
    .mental-health-wrapper {
      background-color: var(--nav-color);
      border-radius: 20px;
      padding: 2rem;
      margin: 1rem;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      
    }

    .header-content-mental-health {
      background-color: var(--bg-secondary);
      color: var(--light-text);
      padding: 1rem;
      border-radius: 15px;
      margin-bottom: 1.5rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

  </style>
</head>

<body>
  <div class="container-fluid ">
    <div class="row">
      <!-- ! SIDEBAR OPEN CODE -->
      <?php include 'sidebar.php' ?>
      <!-- ! SIDEBAR END CODE -->

      <div class="col-9 py-4 ">
        <div class="mental-health mental-health-wrapper">
          <!-- ! HEADER MENTAL HEALTH OPEN CODE -->
          <div class="header-content-mental-health text-center ">
            <h4 class="fw-bold">MENTAL HEALTH</h4>
          </div>
          <!-- ! HEADER END CODE -->
          <!-- ! PRE DEFINE MENTAL HEALTH CODE -->
          <div class="pre-define-mental-health mb-4">
            <div class="row text-center">
              <!-- Dynamically Generated Cards -->
              <div id="pre-define-container" class="d-flex justify-content-center gap-3"></div>
            </div>
          </div>
          <!-- ! PRE DEFINE END CODE -->
          <!-- ! MENTAL HEALTH CONTENT OPEN CODE -->
          <div class="main-content-mental-health p-4 border-0 rounded bg-light text-center shadow">
            <p class="text-muted" id="default-text">cek tingkat mental health kamu</p>
            <!-- Questionnaire Info -->
            <div id="questionnaire-info" style="display: none;">
              <h5 id="selected-title" class="fw-bold"></h5>
              <p id="questionnaire-description"></p>
              <button id="start-btn" class="btn btn-success px-4" onclick="startQuestionnaire()">Mulai</button>
            </div>
            <!-- Questionnaire Section -->
            <div id="question-container" class="p-4 border rounded bg-light" style="display: none;"></div>
            <!-- Result Section -->
            <div id="result-container" style="display: none;"></div>
          </div>
          <!-- ! MENTAL HEALTH CONTENT END CODE -->
        </div>
      </div>
    </div>
  </div>

  <!-- ! LINK BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="../src/js/mentalhealth.js"></script>
</body>

</html>