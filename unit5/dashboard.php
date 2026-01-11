<?php
session_start(); // Resume the session

// redirect to login if not logged in
if(!isset($_SESSION['user_id'])){
    header('Location:login.php');
    exit;
}
echo "Welcome, " . $_SESSION['username'] . "!<br>";

if ($_SESSION['role'] == 'admin'){
    echo 'You have admin privilages. You can edit or delete content.';
} else {
    echo "You are a regular user. Limited access granted.";
}
?>

<a href="logout.php">Logout</a>