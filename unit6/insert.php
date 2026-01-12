<?php
$host = 'localhost';
$dbname = 'books';
$username = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
$sql = "InSERT INTO books (title, author, price)
        VALUES (:title, :author, :price)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':author', $author);
$stmt->bindParam(':price', $price);

$title = "Learning Php";
$author = "John Doe";
$price = 29.99;
$stmt->execute();
echo "Book added successfully!";
?>