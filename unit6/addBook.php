<?php
// ********************
// * CREATE OPERATION 
// * Adds a new record to the database
// *********************

// SQL query with placeholders (:title, :author, :price)
// Placeholders improve security
$sql = 'INSERT INTO books (title, author, price) 
        VALUES (:title, :author, :price)';

// Prepare the sql statement
$stmt = $pdo->prepare($sql);

// Bind values to the placeholders
$stmt->bindParam(':title', $title);
$stmt->bindParam(':author', $author);
$stmt->bindParam(':price', $price);

// Actual data to be inserted
$title = "Learning PHP";
$author = "John Doe";
$price = 29.99;

// Execute the query
$stmt->execute();

echo "Book added successfully!";
?>