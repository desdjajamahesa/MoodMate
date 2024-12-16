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
  <title>Article - MoodMate</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Sidebar CSS -->
  <link rel="stylesheet" href="../src/style/sidebar.css" />
  <!-- Mood Tracker CSS -->
  <link rel="stylesheet" href="../src/style/article.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <?php include 'sidebar.php' ?>
      
      <!-- Article Content -->
      <div class="col-9">
        <div class="article-wrapper p-3">
          <div class="article">
            <div class="header-content-article text-end mt-5">
              <h4>ARTICLE</h4>
            </div>
            <div class="main-content-article mt-4">
              <!-- Buttons to switch between modes -->
              <div class="d-flex justify-content-center mb-4">
                <button class="btn btn-primary mx-2" id="stressBtn">Stress</button>
                <button class="btn btn-warning mx-2" id="anxietyBtn">Anxiety</button>
                <button class="btn btn-danger mx-2" id="hypnosisBtn">Hypnosis</button>
              </div>

              <!-- Content for Stress -->
              <div id="stressContent" class="session-content" style="display: none;">
                <!-- Article 1 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Stress Article 1</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to stress article 1.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer1">Open PDF</button>
                    <div id="pdfContainer1" class="pdf-container" style="display: none;">
                    <iframe 
    src="https://docs.google.com/document/d/1fFE1kpv7xj_O7bQhbaNtvT6hzLrILPf2" 
    width="100%" 
    height="500px" 
    frameborder="0">
  </iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 2 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Stress Article 2</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to stress article 2.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer2">Open PDF</button>
                    <div id="pdfContainer2" class="pdf-container" style="display: none;">
                      <iframe src="../path/to/stressArticle2.pdf" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 3 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Stress Article 3</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to stress article 3.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer3">Open PDF</button>
                    <div id="pdfContainer3" class="pdf-container" style="display: none;">
                      <iframe src="../path/to/stressArticle3.pdf" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 4 (Video Link) -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Stress Article 4: Video on Managing Stress</h5>
                  </div>
                  <div class="card-body">
                    <p>This article contains a video on techniques for managing stress effectively.</p>
                    <button class="btn btn-primary openVideoBtn" type="button" data-target="videoContainer1">Watch Video</button>
                    <div id="videoContainer1" class="video-container" style="display: none;">
                      <iframe src="https://www.youtube.com/embed/exampleVideo1" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 5 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Stress Article 5</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to stress article 5.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer5">Open PDF</button>
                    <div id="pdfContainer5" class="pdf-container" style="display: none;">
                      <iframe src="../path/to/stressArticle5.pdf" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Content for Anxiety -->
              <div id="anxietyContent" class="session-content" style="display: none;">
                <!-- Article 1 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Anxiety Article 1</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to anxiety article 1.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer6">Open PDF</button>
                    <div id="pdfContainer6" class="pdf-container" style="display: none;">
                      <iframe src="../path/to/anxietyArticle1.pdf" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 2 (Video Link) -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Anxiety Article 2: Video on Coping with Anxiety</h5>
                  </div>
                  <div class="card-body">
                    <p>This article contains a video on coping strategies for anxiety.</p>
                    <button class="btn btn-primary openVideoBtn" type="button" data-target="videoContainer2">Watch Video</button>
                    <div id="videoContainer2" class="video-container" style="display: none;">
                      <iframe src="https://www.youtube.com/embed/j734gLbQFbU" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 3 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Anxiety Article 3</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to anxiety article 3.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer7">Open PDF</button>
                    <div id="pdfContainer7" class="pdf-container" style="display: none;">
                      <iframe src="../path/to/anxietyArticle3.pdf" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 4 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Anxiety Article 4</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to anxiety article 4.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer8">Open PDF</button>
                    <div id="pdfContainer8" class="pdf-container" style="display: none;">
                      <iframe src="../path/to/anxietyArticle4.pdf" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>

                <!-- Article 5 -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Anxiety Article 5</h5>
                  </div>
                  <div class="card-body">
                    <p>This is the content related to anxiety article 5.</p>
                    <button class="btn btn-secondary openPdfBtn" type="button" data-target="pdfContainer9">Open PDF</button>
                    <div id="pdfContainer9" class="pdf-container" style="display: none;">
                      <iframe src="../path/to/anxietyArticle5.pdf" width="100%" height="500px" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript to handle mode switching, video and PDF toggling -->
  <script>
    // Function to toggle visibility of PDF and Video containers
    function toggleVisibility(targetId) {
      const container = document.getElementById(targetId);
      if (container) {
        container.style.display = (container.style.display === 'none' || container.style.display === '') ? 'block' : 'none';
      }
    }

    // Event delegation for PDF and Video buttons
    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('openPdfBtn')) {
        const targetId = event.target.getAttribute('data-target');
        toggleVisibility(targetId);
      }
      if (event.target.classList.contains('openVideoBtn')) {
        const targetId = event.target.getAttribute('data-target');
        toggleVisibility(targetId);
      }
    });

    // Mode switching functionality
    const stressBtn = document.getElementById('stressBtn');
    const anxietyBtn = document.getElementById('anxietyBtn');
    const hypnosisBtn = document.getElementById('hypnosisBtn');

    const stressContent = document.getElementById('stressContent');
    const anxietyContent = document.getElementById('anxietyContent');
    const hypnosisContent = document.getElementById('hypnosisContent');

    stressBtn.addEventListener('click', () => {
      stressContent.style.display = 'block';
      anxietyContent.style.display = 'none';
      hypnosisContent.style.display = 'none';
    });

    anxietyBtn.addEventListener('click', () => {
      stressContent.style.display = 'none';
      anxietyContent.style.display = 'block';
      hypnosisContent.style.display = 'none';
    });

    hypnosisBtn.addEventListener('click', () => {
      stressContent.style.display = 'none';
      anxietyContent.style.display = 'none';
      hypnosisContent.style.display = 'block';
    });
  </script>

  <!-- Bootstrap JavaScript for Collapse functionality -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
