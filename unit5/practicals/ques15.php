
<!-- 15. Create a script that connects to a MySQL database using PDO inside a try...catch block. If
the connection fails, log the detailed error to error_log.txt but display only “Connection Failed” to
the user. -->
<?php
// Database connection details
$host = "localhost";
$dbname = "your_database_name";
$username = "your_username";
$password = "your_password";

try {
    // Create PDO connection
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Log detailed error to error_log.txt
    error_log($e->getMessage() . PHP_EOL, 3, "error_log.txt");

    // Display simple message to user
    echo "Connection Failed";
}
?>