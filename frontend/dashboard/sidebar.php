<?php
$currentPage = basename($_SERVER['PHP_SELF']); // Mendapatkan nama file saat ini
?>

<!-- ! SIDEBAR OPEN CODE -->
<div class="col-3 sidebar-wrapper">
    <div class="header-sidebar text-center">
        <img src="../src/assets/images/MoodMate-Logo.png" alt="MoodMate" class="sidebar-logo" />
        <h6 class="welcome-text">Selamat Datang, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h6>
        <p class="tagline-moodmate">"Lacak Perasaanmu dan Temukan Ketenangan"</p>
        <hr class="divider">
    </div>
    <div class="sidebar-menu fw-semibold">
        <div class="sidebar-menu-list">
            <ul class="list-unstyled">
                <li>
                    <a href="mood-tracker.php" class="sidebar-link <?php echo ($currentPage == 'mood-tracker.php') ? 'active' : ''; ?>">Mood Tracker</a>
                </li>
                <li>
                    <a href="mental-health.php" class="sidebar-link <?php echo ($currentPage == 'mental-health.php') ? 'active' : ''; ?>">Mental Health</a>
                </li>
                <li>
                    <a href="journal.php" class="sidebar-link <?php echo ($currentPage == 'journal.php') ? 'active' : ''; ?>">Journal</a>
                </li>
                <li>
                    <a href="article.php" class="sidebar-link <?php echo ($currentPage == 'article.php') ? 'active' : ''; ?>">Article</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-menu-bottom">
            <ul class="list-unstyled mb-0">
                <li><a href="../../backend/logout.php" class="sidebar-link logout">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-sidebar text-center">
        <h6 class="footer-text">
            Copyright <i class="bi bi-c-circle"></i> 2024
        </h6>
        <p class="creator text-muted">Created by Meepoo</p>
    </div>
</div>
<!-- ! SIDEBAR END CODE -->
