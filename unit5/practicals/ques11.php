
<!-- 11. Write a login authentication script that verifies a hashed password using password_verify().
Store the user ID in a session variable if login is successful. -->

<?php
session_start();



// Stored user data 
$storedUserId = 1;
$storedEmail = "admin@example.com";
$storedHashedPassword = password_hash("admin123", PASSWORD_DEFAULT);

// User input (normally from form)
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Check email first
if ($email === $storedEmail) {

    // Verify password
    if (password_verify($password, $storedHashedPassword)) {

        // Store user ID in session
        $_SESSION['user_id'] = $storedUserId;

        echo "Login successful!";
    } else {
        echo "Wrong password!";
    }

} else {
    echo "User not found!";
}
?>