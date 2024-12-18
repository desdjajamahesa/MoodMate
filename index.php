<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome | Mood Mate</title>
  <!-- ! LINK FAVICON WEB -->
  <link rel="shortcut icon" href="frontend/src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
  <!-- ! LINK BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- ! LINK FILE CSS -->
  <link rel="stylesheet" href="frontend/src/style/global.css" />
</head>

<body>
  <!-- ! NAVBAR OPEN CODE -->
  <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex flex-column align-items-center m-auto ms-5 text-center" href="#hero">
        <img src="frontend/src/assets/images/MoodMate-Logo.png" alt="MoodMate" width="80" height="80" />
        <svg width="140" height="80" viewBox="0 0 120 60" class="navbar-brand-text">
          <!-- Path untuk teks curve -->
          <path id="text-path" d="M10,10 A50,50 0 0,0 110,10" fill="transparent" />
          <!-- Teks mengikuti path -->
          <text fill="#F7F7F7" font-size="18" text-anchor="middle" letter-spacing="3">
            <textPath xlink:href="#text-path" startOffset="52%">MoodMate</textPath>
          </text>
        </svg>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center w-100 fs-5 fw-semibold">
          <li class="nav-item">
            <a class="nav-link" href="#mood-tracker">Mood Tracker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mental-health">Mental Health</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#journal">Journal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
        </ul>
        <form class="d-flex me-5" role="search">
          <a href="frontend/login.php" class="btn fw-semibold btn-outline-light me-2">Login</a>
          <a href="frontend/register.php" class="btn fw-semibold btn-outline-light">Register</a>
        </form>
      </div>
    </div>
  </nav>
  <!-- ! NAVBAR END CODE -->

  <!-- ! HERO OPEN CODE -->
  <div id="hero">
    <div class="container-fluid d-flex align-items-center justify-content-center">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="p-5 rounded-lg m-3">
            <h1 class="title-text fw-bold text-center text-light">Selamat Datang di MoodMate</h1>
            <hr class="divider my-2 text-light" />
            <p class="lead fw-semibold mb-1 text-light">Apa itu MoodMate?</p>
            <p class="text-lead fw-semibold text-light">
              MoodMate adalah teman terpercaya kamu untuk membantu kamu menavigasi dan memahami emosi kamu.
              Dengan MoodMate, melacak suasana hati harian kamu menjadi lebih mudah dan bermakna.
              Aplikasi ini ada untuk membantu kamu mengidentifikasi pola emosi, memberikan wawasan yang berharga, dan mendukung perjalanan kamu menuju kesehatan mental yang lebih baik.
              Karena kami percaya bahwa memahami diri sendiri adalah langkah pertama untuk merasa lebih bahagia.
            </p>
            <a class="btn btn-outline-light" href="frontend/login.php" role="button">Lacak Mood Sekarang?</a>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <img src="frontend/src/assets/images/hero-image.png" alt="All about mood" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
  <!-- ! HERO END CODE -->

  <!-- ! MOOD TRACKER OPEN CODE -->
  <div id="mood-tracker">
    <div class="container d-flex flex-column align-items-center justify-content-center">
      <div class="text-center mb-4">
        <h1 class="text-title-mood-tracker fw-bold text-light">Mood Tracker</h1>
        <p class="lead fw-semibold mb-1 text-light">Catat mood-mu setiap hari, kenali perasaanmu, dan ciptakan hari yang lebih baik!</p>
        <p class="text text-light">
          <strong class="text-light">Bagaimana perasaanmu hari ini?</strong>
          Hidup penuh warna dengan berbagai emosi yang kita rasakan setiap harinya. Dengan Mood Tracker, kamu bisa mengungkapkan perasaanmu, mengenali pola emosimu, dan menemukan cara terbaik untuk menjalani harimu.
          Apapun mood-mu hari ini, ceritakan di sini.
          <strong>Ini tentang dirimu, untukmu.</strong>
        </p>
      </div>
      <!-- ! ROW KE-1 -->
      <div class="row justify-content-center mb-4">
        <div class="col-4 d-flex justify-content-end">
          <div class="card custom-card-down" style="width: 15rem">
            <div class="image-wrapper">
              <img src="frontend/src/assets/images/emotions/sangat-senang.png" class="card-img-center custom-img" alt="Sangat Senang" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-light">Sangat Senang</h5>
              <p class="card-text text-light">"Energi positif membanjiri hari ini. Kamu benar-benar bersinar!"</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 15rem">
            <div class="image-wrapper">
              <img src="frontend/src/assets/images/emotions/senang.png" class="card-img-center custom-img" alt="Senang" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-light">Senang</h5>
              <p class="card-text text-light">"Hari yang baik, suasana hati cerah. Tetap pertahankan ya!"</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card custom-card-down" style="width: 15rem">
            <div class="image-wrapper">
              <img src="frontend/src/assets/images/emotions/sedikit-senang.png" class="card-img-center custom-img" alt="Sedikit Senang" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-light">Sedikit Senang</h5>
              <p class="card-text text-light">"Ada secercah kebahagiaan kecil hari ini. Nikmati momen sederhana ini!"</p>
            </div>
          </div>
        </div>
      </div>
      <!-- ! ROW KE-2 -->
      <div class="row justify-content-center mb-4 mt-4">
        <div class="col-12">
          <div class="card custom-card-up" style="width: 15rem">
            <div class="image-wrapper">
              <img src="frontend/src/assets/images/emotions/netral.png" class="card-img-center custom-img" alt="Netral" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-light">Netral</h5>
              <p class="card-text text-light">"Hari seperti biasa, tidak ada yang spesial, tapi itu juga OK! Tetap semangat!"</p>
            </div>
          </div>
        </div>
      </div>
      <!-- ! ROW KE-3 -->
      <div class="row mb-4">
        <div class="col-4 d-flex justify-content-start">
          <div class="card custom-card-up" style="width: 15rem">
            <div class="image-wrapper">
              <img src="frontend/src/assets/images/emotions/sedikit-tidak-senang.png" class="card-img-center custom-img" alt="Sedikit Tidak Senang" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-light">Sedikit Tidak Senang</h5>
              <p class="card-text text-light">"Hari ini mungkin kurang menyenangkan, tapi setiap perasaan berharga. Kamu kuat!"</p>
            </div>
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
          <div class="card" style="width: 15rem">
            <div class="image-wrapper">
              <img src="frontend/src/assets/images/emotions/tidak-senang.png" class="card-img-center custom-img" alt="Tidak Senang" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-light">Tidak Senang</h5>
              <p class="card-text text-light">"Ada tantangan hari ini. Ambil napas dan katakan semuanya akan membaik!"</p>
            </div>
          </div>
        </div>
        <div class="col-4 d-flex justify-content-start">
          <div class="card custom-card-up" style="width: 15rem">
            <div class="image-wrapper">
              <img src="frontend/src/assets/images/emotions/sangat-tidak-senang.png" class="card-img-center custom-img" alt="Sangat Tidak Senang" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-light">Sangat Tidak Senang</h5>
              <p class="card-text text-light">"Beban terasa berat hari ini? Tidak apa, luapkan perasaanmu, biarkan dirimu merasa lebih baik."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ! MOOD TRACKER END CODE -->

  <!-- ! MENTAL HEALTH SECTION -->
  <div id="mental-health">
    <div class="container text-center text-light">
      <!-- Judul Section -->
      <h1 class="fw-bold mb-3">Mental Health</h1>
      <p class="lead mb-5">
        Kenali kondisi mental kamu. Temukan tingkat <strong>Stress</strong>, <strong>Anxiety</strong>, dan <strong>Depresi</strong> melalui kuisioner kami yang mudah dan akurat.
      </p>

      <!-- Card Section -->
      <div class="row justify-content-center">
        <!-- Stress Card -->
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-md border-0">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold text-light">Stress</h5>
              <p class="card-text text-light">Apakah kamu merasa terbebani atau kewalahan akhir-akhir ini? Temukan tingkat stress kamu sekarang.</p>
              <a href="frontend/login.php" class="btn btn-outline-light mt-3">Cek Tingkat Stress</a>
            </div>
          </div>
        </div>
        <!-- Anxiety Card -->
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-md border-0">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold text-light">Anxiety</h5>
              <p class="card-text text-light">Kecemasan berlebih bisa mengganggu. Yuk, lihat seberapa tingkat kecemasan yang kamu alami.</p>
              <a href="frontend/login.php" class="btn btn-outline-light mt-3">Cek Tingkat Anxiety</a>
            </div>
          </div>
        </div>
        <!-- Depression Card -->
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-md border-0">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold text-light">Depresi</h5>
              <p class="card-text text-light">Jangan abaikan perasaan sedih yang berkepanjangan. Kenali tingkat depresi kamu sekarang.</p>
              <a href="frontend/login.php" class="btn btn-outline-light mt-3">Cek Tingkat Depresi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="mt-5">
        <h3 class="fw-bold mb-3">Ingin Mengenal Kondisi Mental Kamu Lebih Dalam?</h3>
        <a href="frontend/login.php" class="btn btn-lg btn-outline-light fw-bold px-5 py-2 shadow">
          Mulai Kuisioner Sekarang
        </a>
      </div>
    </div>
  </div>
  <!-- ! END MENTAL HEALTH SECTION -->


  <!-- ! JOURNAL SECTION -->
  <div id="journal">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center text-light mb-5">
        <h1 class="fw-bold text-title-journal">Journal</h1>
        <p class="lead" style="max-width: 700px; margin: 0 auto;">
          Rekam perjalanan emosimu setiap hari, tuliskan perasaanmu, dan abadikan momen spesial melalui foto. Mulai ciptakan kenangan berharga hari ini!
        </p>
      </div>

      <!-- Two-Column Grid -->
      <div class="row justify-content-center">
        <!-- Write Journal Feature -->
        <div class="col-md-5 mb-4">
          <div class="card h-100 shadow-lg border-0 text-light">
            <div class="card-body text-center p-4">
              <h5 class="fw-bold mb-3">Tulis Jurnal Harian</h5>
              <p class="text">
                Ekspresikan perasaanmu setiap hari. Tuliskan cerita, suasana hati, dan refleksimu untuk memahami dirimu lebih dalam.
              </p>
              <a href="frontend/login.php" class="btn btn-outline-light mt-3">Mulai Menulis</a>
            </div>
          </div>
        </div>

        <!-- Upload Photo Feature -->
        <div class="col-md-5 mb-4">
          <div class="card h-100 shadow-lg border-0 text-light">
            <div class="card-body text-center p-4">
              <h5 class="fw-bold mb-3">Abadikan Momen</h5>
              <p class="text">
                Unggah foto untuk menyimpan momen spesialmu. Nikmati kembali kenangan berharga setiap kali melihatnya.
              </p>
              <a href="frontend/login.php" class="btn btn-outline-light mt-3">Unggah Foto</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ! JOURNAL END SECTION -->

  <!-- ! ARTICLE OPEN CODE -->
  <div id="article">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center text-light mb-5">
        <h1 class="fw-bold">Articles</h1>
        <p class="lead fw-bold">Temukan Artikel Bermanfaat</p>
        <p class="fw-semibold">
          Baca referensi pilihan kami yang mendalam mengenai Anxiety, Stress, dan Depresi.
          Dari latihan pernapasan hingga teknik mindfulness, artikel ini dibuat untuk membekali kamu dengan solusi berbasis penelitian ilmiah yang terpercaya.
          Klik pada referensi, eksplorasi solusi terbaik, dan mulailah perjalanan Anda menuju kesehatan mental yang lebih baik.
        </p>
      </div>

      <!-- Accordion for Articles -->
      <div class="accordion" id="articleAccordion">
        <!-- Anxiety Section -->
        <div class="accordion-item bg-dark">
          <h2 class="accordion-header" id="headingAnxiety">
            <button class="accordion-button bg-dark fw-semibold text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnxiety" aria-expanded="true" aria-controls="collapseAnxiety">
              Anxiety
            </button>
          </h2>
          <div id="collapseAnxiety" class="accordion-collapse collapse" aria-labelledby="headingAnxiety" data-bs-parent="#articleAccordion">
            <div class="accordion-body">
              <ul class="list-unstyled">
                <li>
                  <a href="#anxietyRef1" class="article-link text-decoration-none text-light" data-target="anxietyRef1">1. Deep Breathing - A Better State-of-Mind</a>
                  <div id="anxietyRef1" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/deepbreathing/abetter.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#anxietyRef2" class="article-link text-decoration-none text-light" data-target="anxietyRef2">2. Deep Breathing - Benefits From One Session</a>
                  <div id="anxietyRef2" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/deepbreathing/Benefits.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#anxietyRef3" class="article-link text-decoration-none text-light" data-target="anxietyRef3">3. Deep Breathing - Decrease Anxiety Among Students</a>
                  <div id="anxietyRef3" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/deepbreathing/Decrease.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#anxietyRef4" class="article-link text-decoration-none text-light" data-target="anxietyRef4">4. Deep Breathing - Deep Pressure Therapy</a>
                  <div id="anxietyRef4" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/deepbreathing/Deep.pdf"></iframe>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Stress Section -->
        <div class="accordion-item bg-dark">
          <h2 class="accordion-header" id="headingStress">
            <button class="accordion-button collapsed bg-dark fw-semibold text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStress" aria-expanded="false" aria-controls="collapseStress">
              Stress
            </button>
          </h2>
          <div id="collapseStress" class="accordion-collapse collapse" aria-labelledby="headingStress" data-bs-parent="#articleAccordion">
            <div class="accordion-body">
              <ul class="list-unstyled">
                <li>
                  <a href="#stressRef1" class="article-link text-decoration-none text-light" data-target="stressRef1">1. Hypnosis - Close Your Eyes and Relax</a>
                  <div id="stressRef1" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/hypnosis/Close.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef2" class="article-link text-decoration-none text-light" data-target="stressRef2">2. Hypnosis - Can Hypnosis and Virtual Reality Reduce Anxiety</a>
                  <div id="stressRef2" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/hypnosis/Can_Hypno.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef3" class="article-link text-decoration-none text-light" data-target="stressRef3">3. Hypnosis - Effectiveness of Hypnosis</a>
                  <div id="stressRef3" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/hypnosis/Effectiveness.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef4" class="article-link text-decoration-none text-light" data-target="stressRef4">4. Hypnosis - Group Hypnosis for Stress Reduction</a>
                  <div id="stressRef4" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/hypnosis/GroupHypnosis.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef5" class="article-link text-decoration-none text-light" data-target="stressRef5">5. Hypnosis - Virtual Reality and Hypnosis</a>
                  <div id="stressRef5" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/hypnosis/VRandHypno.pdf"></iframe>
                  </div>
                </li>
                <hr class="divider fw-semibold text-light">
                <li>
                  <a href="#stressRef6" class="article-link text-decoration-none text-light" data-target="stressRef6">1. Meditation - Brief Mindfulness-Based Training</a>
                  <div id="stressRef6" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/meditation/Brief_mindfulness.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef7" class="article-link text-decoration-none text-light" data-target="stressRef7">2. Meditation - Efficacy of The Mindfulness Meditation</a>
                  <div id="stressRef7" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/meditation/Efficacy_of_the_Mindfulness.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef8" class="article-link text-decoration-none text-light" data-target="stressRef8">3. Meditation - Impact of a Yoga and Meditation Intervention</a>
                  <div id="stressRef8" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/meditation/Impact_of_a_Yoga_and_Meditation.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef9" class="article-link text-decoration-none text-light" data-target="stressRef9">4. Meditation - Meditation and Yoga</a>
                  <div id="stressRef9" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/meditation/Meditation_and_Yoga_for_PTSD.pdf"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#stressRef10" class="article-link text-decoration-none text-light" data-target="stressRef10">5. Meditation - The Effects of Mindfulness Meditation on Stress</a>
                  <div id="stressRef10" class="collapse pdf-container">
                    <iframe src="frontend/src/assets/meditation/The_Effects_of_Mindfulness_Meditation.pdf"></iframe>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ! ARTICLE END CODE -->

  <!-- ! FOOTER OPEN CODE -->
  <footer class="bg-dark text-dark py-5">
    <div class="container">
      <div class="row">
        <!-- Logo dan Deskripsi -->
        <div class="col-md-8">
          <h5 class="fw-bold">MoodMate</h5>
          <p>Designed and built with all the love in the world by Meepoo to client.</p>
          <p>Copyright Meepoo 2024</p>
        </div>

        <!-- Links -->
        <div class="col-md-4">
          <ul class="list-unstyled">
            <li><a href="#mood-tracker" class="text-dark text-decoration-none fw-semibold">Mood Tracker</a></li>
            <li><a href="#mental-health" class="text-dark text-decoration-none fw-semibold">Mental Health</a></li>
            <li><a href="#journal" class="text-dark text-decoration-none fw-semibold">Journal</a></li>
            <li><a href="#article" class="text-dark text-decoration-none fw-semibold">Articles</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- ! FOOTER END CODE -->

  <!-- ! LINK BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const links = document.querySelectorAll(".article-link"); // Ambil semua link artikel

      links.forEach((link) => {
        link.addEventListener("click", function(event) {
          event.preventDefault(); // Hindari aksi default
          const targetId = this.getAttribute("data-target"); // Ambil target ID dari link
          const targetPDF = document.getElementById(targetId); // Ambil elemen PDF target

          // Tutup semua PDF terlebih dahulu
          document.querySelectorAll(".pdf-container").forEach((el) => {
            if (el.id !== targetId) {
              el.classList.remove("show");
            }
          });

          // Toggle class 'show' untuk target PDF (buka/tutup)
          if (targetPDF.classList.contains("show")) {
            targetPDF.classList.remove("show"); // Jika sudah terbuka, tutup
          } else {
            targetPDF.classList.add("show"); // Jika tertutup, buka
            targetPDF.scrollIntoView({
              behavior: "smooth",
              block: "center"
            }); // Scroll ke PDF
          }
        });
      });
    });
  </script>

</body>

</html>