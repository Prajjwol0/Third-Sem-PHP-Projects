
<!-- 12. Check if `'milk'` exists in `['bread', 'eggs']` and count the array elements.
 -->

<?php
$items = ['bread', 'eggs'];

// Check if 'milk' exists
if (in_array('milk', $items)) {
    echo "'milk' exists in the array.";
} else {
    echo "'milk' does not exist in the array.";
}

echo "<br>";

// Count the number of elements
echo "Number of items: " . count($items);
?>
