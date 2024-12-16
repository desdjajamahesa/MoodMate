<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MoodMate Login</title>
  <!-- Link Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!-- Container Utama -->
  <div class="container mt-5">
    <!-- Tombol Back ke Landing Page -->
    <div class="mb-3">
      <a href="../index.php" class="btn btn-secondary">
        &larr;
      </a>
    </div>

    <!-- Card Login -->
    <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
      <h2 class="text-center mb-4">Login</h2>
      
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
  </div>

  <!-- Bootstrap 5.3 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pp2s9CdKbYtHR9GxTcwyoa5RHAVICURC0xQYluCzbo1EshLZ4eVqX5F75d9vY8tx" crossorigin="anonymous"></script>
</body>

</html>