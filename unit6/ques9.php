
<!-- 9. Write a PHP script that performs both **UPDATE** and **DELETE** operations on the `users` table based on a given user ID, using Prepared Statements. -->

<?php

$host = "localhost";
$dbName = "test_db";
$dbUser = "root";
$dbPassword = "";

/**
 * Create a PDO database connection
 */
$dsn = "mysql:host=$host;dbname=$dbName;charset=utf8mb4";
$pdo = new PDO($dsn, $dbUser, $dbPassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * Update a user's username and email by ID
 */
function updateUser(PDO $pdo, int $userId, string $newUsername, string $newEmail)
{
    // SQL query with named placeholders (safer and more readable)
    $sql = "
        UPDATE users
        SET username = :username, email = :email
        WHERE id = :id
    ";

    // Prepare the SQL statement
    $statement = $pdo->prepare($sql);

    // Bind values to placeholders
    $statement->bindValue(":username", $newUsername);
    $statement->bindValue(":email", $newEmail);
    $statement->bindValue(":id", $userId, PDO::PARAM_INT);

    // Execute the statement
    $statement->execute();
}

/**
 * Delete a user by ID
 */
function deleteUser(PDO $pdo, int $userId)
{
    // SQL query with a placeholder
    $sql = "DELETE FROM users WHERE id = :id";

    // Prepare the SQL statement
    $statement = $pdo->prepare($sql);

    // Bind the user ID as an integer
    $statement->bindValue(":id", $userId, PDO::PARAM_INT);

    // Execute the delete query
    $statement->execute();
}

/* =========================
   Script execution starts here
   ========================= */

$userId = 5;

/**
 * UPDATE example
 */
updateUser($pdo, $userId, "new_username", "newemail@example.com");

/**
 * DELETE example
 */
deleteUser($pdo, $userId);
