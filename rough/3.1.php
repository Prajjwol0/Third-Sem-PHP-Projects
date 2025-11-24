<?php
// echo and print: Displaying output [66]
echo "<h3>Echo and Print:</h3>";
echo "Hello, world! "; // A common way to send text to the browser [66]
print "What’s new?"; // Another way to send text [66]
echo "<p>PHP can send <strong>HTML code</strong> as well as simple text to the browser.</p>"; [67];

// strlen(): Get string length [31]
echo "<h3>String Length:</h3>";
$text = "PHP & MySQL: Novice to Ninja";
echo "Length of '$text': " . strlen($text) . " characters.<br>"; // Outputs 29 [31]

// strtolower(), strtoupper(), ucfirst(): Changing case [31]
echo "<h3>Case Conversion:</h3>";
$name = "john doe";
echo "Original: " . $name . "<br>";
echo "Uppercase: " . strtoupper($name) . "<br>"; // Outputs JOHN DOE [31]
echo "Lowercase: " . strtolower("PHP PROGRAMMING") . "<br>"; // Outputs php programming [31]
echo "First letter capitalized: " . ucfirst($name) . "<br>"; // Outputs John doe [31]

// htmlspecialchars(): Securing output [68, 69]
echo "<h3>Security (htmlspecialchars):</h3>";
$maliciousInput = "<script>alert('XSS Attack!');</script>";
echo "Unsafe display: " . $maliciousInput . "<br>"; // This would execute if not escaped!
echo "Safe display: " . htmlspecialchars($maliciousInput, ENT_QUOTES, 'UTF-8') . "<br>"; [68];
echo "<p>Always use <code>htmlspecialchars</code> when displaying user-submitted data!</p>"; [69];

// str_replace(), stripos(): Finding and replacing [57, 70]
echo "<h3>Finding and Replacing:</h3>";
$sentence = "The quick brown fox jumps over the lazy dog.";
echo str_replace("fox", "cat", $sentence) . "<br>"; // Replaces "fox" with "cat" [57]

$emailSubject = "Important update from example.com";
if (stripos($emailSubject, 'to') !== false) { // Case-insensitive search [70]
    echo "Potential spam detected!<br>";
}

// explode() and implode(): Converting between strings and arrays [71]
echo "<h3>Explode and Implode:</h3>";
$dateString = "2023-10-26";
$dateParts = explode("-", $dateString); // Converts string to array [72]
echo 'Year: ' . $dateParts[0] . ', Month: ' . $dateParts[1] . ', Day: ' . $dateParts[2] . "<br>";

$tags = ['php', 'mysql', 'webdev'];
echo "Tags: " . implode(', ', $tags) . "<br>"; // Converts array to string [72]
?>
