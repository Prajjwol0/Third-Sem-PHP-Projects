<?php
$age = 25;
$isStudent = true;

// Using AND (&&)
if ($age > 18 && $isStudent) {
    echo "<p>Eligible for student discount.</p>"; // This will print
}

// Using OR (||)
$rolledSix = false;
$rolledFive = true;
if ($rolledSix || $rolledFive) {
    echo "<p>You win! (rolled a 5 or 6).</p>"; // This will print
}

// Using NOT (!)
$isEmpty = false;
if (!$isEmpty) {
    echo "<p>The variable is not empty.</p>"; // This will print
}

// Using Null Coalescing Operator ('??')
$username = $_GET['user'] ?? 'Guest'; // If $_GET['user'] is not set, $username becomes 'Guest'
echo "<p>Welcome, ". $username . "!</p>";
?>