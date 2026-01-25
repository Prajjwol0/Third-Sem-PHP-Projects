<?php
$host = "localhost";
$dbname = "books";
$username = "root";      // default for XAMPP
$password = "";          // default for XAMPP

try {
    // 1. Connect to database
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    // Enable error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. SQL to create table
    $sql = "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(100) NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ";

    // 3. Execute query
    $pdo->exec($sql);

    echo "Table 'users' created successfully";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
