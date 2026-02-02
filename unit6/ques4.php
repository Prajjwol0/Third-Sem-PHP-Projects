<!-- 4. Write a PHP script that retrieves all records from the `students` table and displays them in an HTML table using a loop. -->

<?php
try {
    // Connect to database
    $pdo = new PDO('mysql:host=localhost;dbname=student_portal', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute SELECT query
    $stmt = $pdo->query("SELECT * FROM students");

    // Start HTML table
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th></tr>";

    // Loop through results
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>