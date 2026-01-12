
<!-- 15. Create a script that connects to a MySQL database using PDO inside a try...catch block. If
the connection fails, log the detailed error to error_log.txt but display only “Connection Failed” to
the user. -->
<?php
// Database details
$host = "localhost";
$dbname = "your_database_name";
$username = "your_username";
$password = "your_password";

try {
    // Connect to MySQL using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // If connection is successful
    echo "Connected successfully";

} catch (PDOException $e) {
    // Save full error message to a file
    error_log($e->getMessage() . PHP_EOL, 3, "error_log.txt");

    // Show simple message to user
    echo "Connection Failed";
}
?>