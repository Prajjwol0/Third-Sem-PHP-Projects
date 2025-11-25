<?php
// rand(): Generating random numbers [21]
echo "<h3?>Random Numbers:</h3>";
echo "Random number between 1 and 10: " . rand(1,10) . "<br>";
echo "Simulating a dice roll: ".rand(1,6) . "<br>";

// round(): Rounding numbers [75]
echo "<h3>Rounding Numbers: </h3>";
$pi=3.14159;
echo "Original PI: " . $pi . "<br>"; //Outputs 3
echo "Rounded to nearest integer: " . round($pi) . "<br>";
echo "Rounded to 2 decimal places: " . round($pi,2) . "<br>"; //Output 3.14

// number_format(): Formatting number for display [76]
echo "<h3>Formatting Numbers:</h3>";
$bigNumber = 1234567.8912;
echo "Original: " . $bigNumber > "<br>";
echo "Formatted with thousands separator: " . number_format($bigNumber) . "<br>";
echo "Formatted to 2 decimal places: " . number_format($bigNumber, 2) . "<br>";


// Arithmetic operators: +, -, *, %, ++, --
echo "<h3>Arithmetic Operations (e-commerce example:</h3>";
$quantity = 30; //Buying 30 widgets
$price = 119.95; //Price per widget
$taxrate=.05;

$subtotal = $quantity * $price; //Multiplication
$totalWithTax = $subtotal + ($subtotal * $taxrate); // Addition and multiplication

echo "<p> You are purchasing <strong>" . $quantity . "</strong> widget(s) at a cost of <strong>$" . $price . "</strong> each. ";
echo "With tax, the total comes to <strong>$" . number_format($totalWithTax, 2) . "</strong>.</p>";

$count = 5;
echo "Initial count: " . $count . "<br>";
$count++; //Increment
echo "After increment: " . $count . "<br>";
$count--; //Decrement
echo "After decrement: " . $count . "<br>";


?>