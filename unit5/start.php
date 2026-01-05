<?php
//  Start the session (must be at the very top of the script)
session_start();

//  Set session variables
$_SESSION['username'] = "Prajjwol";
$_SESSION['role'] = 'admin';

echo "Session has been set. <br>";
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Role: " . $_SESSION['role'];
?>