<!--for, while, do while, for each example -->

<?php
// For loop example
echo "For loop example <br>";
for ($a = 1; $a <= 3; $a++) {
    echo "I am for loop-$a <br>";
}

// while loop example 
echo "<br>";
echo "while loop example <br>";
$b = 1;
while ($b <= 3) {
    echo "I am while loop-$b <br>";
    $b += 1;
}
// do while loop example 
echo "<br>";
echo "do while loop example <br>";
$c = 1;
do {
    echo "I am do while loop-$c <br>";   
    $c += 1;
} while ($c <= 3);

// For each loop example 
echo "<br>";
echo "do while loop example <br>";
$subjects = ["Math", "Computer", "Coding"];
foreach ($subjects as $subject) {
    echo "$subject\n";
}


?>