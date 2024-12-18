<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MoodMate Login</title>
  <!-- Link Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Global CSS sesuai permintaan */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --bg-primary: #97bcd6;
      --bg-secondary: #ffb4c0;
      --light-text: #f7f7f7;
      --dark-text: #a8c2e3;
    }

    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      background: linear-gradient(to bottom, #97bcd6, #6a82fb);
      color: var(--light-text);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .head{
      color: #f7f7f7;
    }
    .card {
      background-color: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease-in-out;
      padding: 2rem;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .btn-primary {
      background-color: var(--bg-secondary);
      border: none;
      font-weight: bold;
      color: #fff;
    }

    .btn-primary:hover {
      background-color: #ff8291;
    }

    .btn-link {
      color: var(--light-text);
      text-decoration: none;
    }
   
    .btn-link:hover {
      color: var(--dark-text);
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <!-- Container Utama -->
  <div class="card" style="max-width: 500px;">
    <!-- Tombol Back ke Landing Page -->
    <div class="mb-2">
  <a href="../index.php" style="font-size: 2rem; color: white; text-decoration: none;">
    <i class="bi bi-arrow-left"></i>
  </a>
</div>
    <h2 class="head text-center mb-4">LOGIN</h2>

    <?php
    // Menampilkan pesan error jika ada
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "empty") {
        echo "<div class='alert alert-danger text-center'>All fields are required.</div>";
      } elseif ($_GET['error'] == "email") {
        echo "<div class='alert alert-danger text-center'>Email not found.</div>";
      } elseif ($_GET['error'] == "password") {
        echo "<div class='alert alert-danger text-center'>Incorrect password.</div>";
      }
    }
    ?>

    <!-- Form Login -->
    <form method="POST" action="../backend/login.php">
      <!-- Input Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
      </div>

      <!-- Input Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
      </div>

      <!-- Button Login -->
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

      <!-- Link ke Register -->
      <div class="text-center mt-3">
        <a href="register.php" class="btn btn-link">Don't have an account? Register</a>
      </div>
    </form>
  </div>

  <!-- Bootstrap 5.3 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pp2s9CdKbYtHR9GxTcwyoa5RHAVICURC0xQYluCzbo1EshLZ4eVqX5F75d9vY8tx" crossorigin="anonymous"></script>
</body>

</html>
