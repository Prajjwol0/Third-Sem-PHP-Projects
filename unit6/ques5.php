<!-- 5. Modify the student display script so that alternate rows in the HTML table have different background colors using the **ternary operator**. -->

<?php
try {
    // Connect to database
    $pdo = new PDO('mysql:host=localhost;dbname=student_portal', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Select all students
    $stmt = $pdo->query("SELECT * FROM students");

    // Start HTML table
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th></tr>";

    $rowCount = 0; // for alternating row colors

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Use ternary operator for background color
        $bgColor = ($rowCount % 2 == 0) ? "#f2f2f2" : "#ffffff";

        echo "<tr style='background-color: $bgColor'>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "</tr>";

        $rowCount++;
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>