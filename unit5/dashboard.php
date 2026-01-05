<?php
session_start(); // Resume the session

if (isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'] . "!<br>";
    echo "Your role is: " . $_SESSION['role'] . "!<br>";
} else {
    echo "You are not logged in.";
}
?>