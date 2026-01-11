<!-- 5.6. Create a “Login” page that starts a session and stores a session variable username with a value entered by the user. Display the username on a welcome page. -->

<?php
session_start();

if(isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: welcome.php");
}
?>

<form method="post">
    Username: <input type="text" name="username" required>
    <input type="submit" value="Login">
</form>

<!-- Continuing in welcome.php -->

