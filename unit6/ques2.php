<!-- 2. Write a PHP script using PDO that connects to the `student_portal` database and displays **“Database Connected Successfully”** if the connection is successful, or a user-friendly error message if it fails. -->

<?php

try{
 $pdo = new PDO("mysql:host=localhost;dbname=student_portal","root","");

//  Set error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Database Connected!!";
} catch (PDOException $e) {
    echo "Connection failed: Check your db settings:, ".$e;
}
?>
