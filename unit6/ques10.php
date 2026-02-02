<!-- 10. Simulate a **Digital Wallet Transfer** where money is transferred from one user to another. Use a **Transaction** to ensure that the amount is deducted from one user and added to the other only if both operations succeed; otherwise, rollback the transaction. -->

<?php
// Create database connection using PDO
$pdo = new PDO(
    "mysql:host=localhost;dbname=test_db;charset=utf8mb4",
    "root",
    "",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// Sender, receiver, and transfer amount
$senderId = 1;
$receiverId = 2;
$amount = 500;

try {
    // Start the transaction
    $pdo->beginTransaction();

    // Deduct amount from sender
    $deductQuery = "UPDATE users SET balance = balance - :amount WHERE id = :senderId";
    $deductStmt = $pdo->prepare($deductQuery);
    $deductStmt->execute([
        ":amount" => $amount,
        ":senderId" => $senderId
    ]);

    // Add amount to receiver
    $addQuery = "UPDATE users SET balance = balance + :amount WHERE id = :receiverId";
    $addStmt = $pdo->prepare($addQuery);
    $addStmt->execute([
        ":amount" => $amount,
        ":receiverId" => $receiverId
    ]);

    // If both queries succeed, commit the transaction
    $pdo->commit();
    echo "Transfer successful";

} catch (Exception $e) {
    // If any operation fails, rollback everything
    $pdo->rollBack();
    echo "Transfer failed. Transaction rolled back.";
}
    