
<!-- How to Create and Access: You can create indexed arrays using square brackets
[] (introduced in PHP 5.4 and preferred by developers for being concise) or the
array() keyword.
• Creating an Indexed Array:
• In this example, $myArray would hold 'one', $myArray would hold 2, and
$myArray would hold '3'. You can also add elements one at a time:
• Accessing Elements: To access a value, you use its numeric index in square
brackets after the array variable name.
• You can also use a variable as an index -->

<?php

$myArray=['one',2,'3'];
$index=2;
echo $myArray[1];
echo "<br>";
echo $myArray[0];
echo "<br>";
echo $myArray[$index];
echo "<br>";
echo "<br>";
// loop


foreach($myArray as $value =>$yourArray)
{
    echo"$value =>$yourArray<br>";
}
?>

