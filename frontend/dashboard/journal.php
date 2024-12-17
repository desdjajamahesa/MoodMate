<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
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
    <!-- Favicon -->
    <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    
    <!-- Sidebar CSS -->
    <link rel="stylesheet" href="../src/style/sidebar.css" />
    <link rel="stylesheet" href="../src/style/journal.css" />
    <!-- Custom Styles -->
    <style>
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php include 'sidebar.php' ?>

            <!-- Journal Content -->
            <div class="col-9 d-flex">
                <div class="journal-wrapper col-8">
                    <div class="journal-header">
                        <h4 class="mb-0">JOURNAL - Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h4>
                    </div>
                    
                    <form id="journalForm" data-user-id="<?php echo $_SESSION['user_id']; ?>">
                        <textarea 
                            class="form-control" 
                            id="journalEntry" 
                            placeholder="Write your inner thoughts, feelings, and reflections here..."
                        ></textarea>
                        <button type="submit" class="btn btn-primary">Save Journal Entry</button>
                    </form>
                </div>

                <div class="journal-history col-4">
                    <h5 class="journal-history-title">Journal History</h5>
                    <ul id="journalHistory" class="list-group">
                        <!-- Journal entries will be dynamically added here -->
                        <li class="list-group-item journal-history-item text-center text-muted">
                            Your journal entries will appear here
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../src/js/journal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>