<!-- 2.7 Write a while loop to keep rolling dice until a 6 appears. -->




<?php
do {
    $roll = rand(1, 6);
    echo "You rolled a $roll\n";
} while ($roll != 6);

echo "You got a 6! Stopping the roll.";
?>







