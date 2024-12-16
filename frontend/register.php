<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MoodMate Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <div class="card p-4">
      <h2>Register</h2>
      <?php
      // Menampilkan pesan error
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "empty") {
          echo "<div class='alert alert-danger'>All fields are required.</div>";
        } elseif ($_GET['error'] == "email_taken") {
          echo "<div class='alert alert-danger'>Email is already in use.</div>";
        } elseif ($_GET['error'] == "server") {
          echo "<div class='alert alert-danger'>Server error, please try again.</div>";
        }
      }

      if (isset($_GET['register']) && $_GET['register'] == "success") {
        echo "<div class='alert alert-success'>Registration successful! Please login.</div>";
      }
      ?>
      <form method="POST" action="../backend/register.php">
        <div class="form-group">
          <label>Nama:</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Password Baru:</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Tanggal Lahir:</label>
          <input type="date" name="birth_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="login.php" class="btn btn-link">Already have an account? Login</a>
      </form>
    </div>
  </div>
</body>

</html>