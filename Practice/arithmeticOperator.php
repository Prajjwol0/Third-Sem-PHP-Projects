<?php # Script 1.8 - numbers.php
$quantity = 30; // Buying 30 widgets.
$price = 119.95;
$taxrate = .05; // 5% sales tax.

// Calculate the total:
$total = $quantity * $price; // Multiplication
$total = $total + ($total * $taxrate); // Addition and Multiplication

// Increment example (outside of loop for clarity)
$counter = 10;
echo "<p>Initial counter: " . $counter . "</p>";
$counter++; // $counter is now 11
echo "<p>After increment: " . $counter . "</p>"; ?>