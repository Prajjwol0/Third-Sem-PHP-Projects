<!-- 10. Create a script that sets a session variable role to admin and then checks on another page if
the user is an admin before displaying an “Admin Panel” link. If not, redirect to index.php. -->

<?php
session_start(); // Start the session

// Check if the user is admin
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    echo "<a href='admin_panel.php'>Admin Panel</a>";
} else {
    // Redirect to index.php if not admin
    header("Location: index.php");
    exit();
}
?>
    