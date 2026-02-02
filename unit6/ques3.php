<!-- 3. Write a PHP script that inserts a new student record into the `students` table using **Prepared Statements**. The values may be hard-coded for testing purposes. -->

<?php

try {
    // Connect to database:
    $pdo = new PDO('mysql:host=localhost;dbname=student_portal', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepares sql statement:
    $stmt = $pdo->prepare("
INSERT INTO students 
(
name, email, course 
) 
values
(
:name,
:email,
:course
)
");

    // Hard-coded values
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course', $course);

    $name = "Ram";
    $email = "ram@gmail.com";
    $course = "science";

    // Execute the statement:
    $stmt->execute();

    echo "New student record inserted successfully!";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>