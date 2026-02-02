<!-- 1. Create a MySQL database named `student_portal`. Inside it, create a table `students` with the following columns: `id` (INT, Primary Key, Auto Increment), `name`
(VARCHAR), `email` (VARCHAR), and `course` (VARCHAR). -->

<?php
// Connect to MySQL
$conn = new mysqli('localhost', 'root', '');

// Create database
$conn->query('CREATE DATABASE student_portal');

// Select database
$conn->select_db('student_portal');

// Create table 
$conn->query('
CREATE TABLE students (
id INT AUTO_INCREAMENT PRIMARY KEY,
name VARCHAR(30),
email VARCHAR(30),
course VARCHAR (30)
)
');

    ?>