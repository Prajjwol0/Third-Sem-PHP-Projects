<?php
require 'db.php';

if (!isset($_POST['username'], $_POST['password'])) {
    die("Form not submitted correctly");
}

$username = $_POST['username'];
$password = $_POST['password']; // try: ' OR '1'='1

$sql = "SELECT * FROM users 
        WHERE username = '$username' 
        AND password = '$password'";

$result = $pdo->query($sql);

if ($result && $result->rowCount() > 0) {
    echo "Login success (SQL injection worked)";
} else {
    echo "Login failed";
}
?>