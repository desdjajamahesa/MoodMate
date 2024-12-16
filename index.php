<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome | Mood Mate</title>
    <!-- ! LINK FAVICON WEB -->
    <link rel="shortcut icon" href="frontend/src/assets/images/MoodMate-Logo.png" type="image/x-icon"/>
    <!-- ! LINK BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- ! LINK FILE CSS -->
    <link rel="stylesheet" href="frontend/src/style/global.css"/>
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
              <h1 class="title-text fw-bold text-center">Welcome To MoodMate</h1>
              <hr class="divider my-2" />
              <p class="lead fw-semibold mb-1">What is MoodMate?</p>
              <p class="text-lead fw-semibold">
                MoodMate is your trusted companion to help you navigate and understand your emotions. MoodMate, tracking your daily moods becomes easier and more meaningful. This app is designed to help you identify emotional patterns,
                provide valuable insights, and support your journey toward better mental well-being. Because we believe that understanding yourself is the first step to feeling happier.
              </p>
              <a class="btn btn-primary" href="frontend/login.php" role="button">Check your mood</a>
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
          <h1 class="text-title-mood-tracker fw-bold">Mood Tracker</h1>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem asperiores dolorem ab quae, doloremque soluta dolores nisi modi impedit veniam quam eum labore iusto hic, aliquam debitis alias, facere odio.
          </p>
        </div>
        <!-- ! ROW KE-1 -->
        <div class="row justify-content-center mb-4">
          <div class="col-4 d-flex justify-content-end">
            <div class="card custom-card-down" style="width: 18rem">
              <div class="image-wrapper">
                <img src="frontend/src/assets/images/emotions/sangat-senang.png" class="card-img-center custom-img" alt="Sangat Senang" />
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Sangat Senang</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem">
              <div class="image-wrapper">
                <img src="frontend/src/assets/images/emotions/senang.png" class="card-img-center custom-img" alt="Senang" />
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Senang</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card custom-card-down" style="width: 18rem">
              <div class="image-wrapper">
                <img src="frontend/src/assets/images/emotions/sedikit-senang.png" class="card-img-center custom-img" alt="Sedikit Senang" />
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Sedikit Senang</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- ! ROW KE-2 -->
        <div class="row justify-content-center mb-4 mt-4">
          <div class="col-12">
            <div class="card custom-card-up" style="width: 18rem">
              <div class="image-wrapper">
                <img src="frontend/src/assets/images/emotions/netral.png" class="card-img-center custom-img" alt="Netral" />
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Netral</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- ! ROW KE-3 -->
        <div class="row mb-4">
          <div class="col-4 d-flex justify-content-start">
            <div class="card custom-card-up" style="width: 18rem">
              <div class="image-wrapper">
                <img src="frontend/src/assets/images/emotions/sedikit-tidak-senang.png" class="card-img-center custom-img" alt="Sedikit Tidak Senang" />
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Sedikit Tidak Senang</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem">
              <div class="image-wrapper">
                <img src="frontend/src/assets/images/emotions/tidak-senang.png" class="card-img-center custom-img" alt="Tidak Senang" />
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Tidak Senang</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex justify-content-start">
            <div class="card custom-card-up" style="width: 18rem">
              <div class="image-wrapper">
                <img src="frontend/src/assets/images/emotions/sangat-tidak-senang.png" class="card-img-center custom-img" alt="Sangat Tidak Senang" />
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Sangat Tidak Senang</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! MOOD TRACKER END CODE -->

    <!-- ! MENTAL HEALTH OPEN CODE -->
    <div id="mental-health">
      <div class="container d-flex align-items-center justify-content-center">
        <h1 class="text-title-mental-health fw-bold">Mental Health</h1>
      </div>
    </div>
    <!-- ! MENTAL HEALTH END CODE-->

    <!-- ! JOURNAL OPEN CODE -->
    <div id="journal">
      <div class="container d-flex align-items-center justify-content-center">
        <h1 class="text-title-journal fw-bold">Journal</h1>
      </div>
    </div>
    <!-- ! JOURNAL END CODE -->

    <!-- ! ARTICLE OPEN CODE -->
    <div id="article">
      <div class="container d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-title-article fw-bold">Articles</h1>
        <div class="row g-5">
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-5">
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 16rem">
              <img src="..." class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! ARTICLE END CODE -->

    <!-- ! FOOTER OPEN CODE -->
    <footer class="bg-dark text-light py-5">
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
              <li><a href="#mood-tracker" class="text-light text-decoration-none">Mood Tracker</a></li>
              <li><a href="#mental-health" class="text-light text-decoration-none">Mental Health</a></li>
              <li><a href="#journal" class="text-light text-decoration-none">Journal</a></li>
              <li><a href="#article" class="text-light text-decoration-none">Articles</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- ! FOOTER END CODE -->

    <!-- ! LINK BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
