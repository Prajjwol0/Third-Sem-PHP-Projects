<!-- 6. Create a **Contact Us** form that collects a user’s name, email, and message. Write a PHP script that validates the input and inserts the data into a `contact_messages` table using Prepared Statements. -->

<?php
// Simple Contact Us Form + Insert Script
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=student_portal', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        echo "Message sent successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Simple HTML Form -->
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message: <textarea name="message" required></textarea><br><br>
    <input type="submit" name="submit" value="Send">
</form>