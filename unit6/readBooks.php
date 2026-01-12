<?php
//  Read operation
// Retrieves data from the database

// SQL query to fetch all records
$sql = "SELECT * FROM books";

// Prepare the query 
$stmt = $pdo->prepare($sql);

// Execute the query
$stmt->execute();

// Fetch all records as an associative array
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display each book
foreach ($books as $book){
    echo "<p> ID: " . $book['id'] ."<br>";
    echo "<p> Title: " . $book['title'] ."<br>";
    echo "<p> Author: " . $book['author'] ."<br>";
    echo "<p> Price: " . $book['price'] ."<br> </p>";
}
?>