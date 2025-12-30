<!-- 4.10. Create a sign-up form with fields for username (required, minimum 5 characters), email (required, valid format), and password (required, minimum 8 characters). Validate all fields, collect errors into an array, and display them all at once if any validation fails. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>

<h3>Sign Up Form</h3>

<form method="post">
    <input type="text" name="username" placeholder="Username"
           value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
    <br><br>

    <input type="text" name="email" placeholder="Email"
           value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <br><br>

    <input type="password" name="password" placeholder="Password">
    <br><br>

    <input type="submit" value="Sign Up">
</form>

<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Username validation
    if (empty($_POST['username'])) {
        $errors[] = "Username is required.";
    } elseif (strlen($_POST['username']) < 5) {
        $errors[] = "Username must be at least 5 characters.";
    }

    // Email validation
    if (empty($_POST['email'])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Password validation
    if (empty($_POST['password'])) {
        $errors[] = "Password is required.";
    } elseif (strlen($_POST['password']) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }

    // Display all errors at once
    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Sign up successful!";
    }
}
?>

</body>
</html>
