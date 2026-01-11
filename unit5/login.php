<?php
session_start();
require 'user.php';

if ($_SERVER ['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $found = false;

    foreach ($users as $user){
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            // Authentication successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $found = true;
            header('Location: dashboard.php');
            exit;
        } 
    }

    if (!$found) {
        echo "Invalid username or password.";
    }
}

?>

<form action="" method="post">
    Username: <input type="text" name="username" required> <br><br>
    password: <input type="password" name="password" required> <br><br>
    <button type="submit">Login</button>
</form>