
11. Sort `['orange', 'apple', 'banana']` alphabetically and sort `['c'=>3, 'a'=>1, 'b'=>2]` by keys.

<?php

// 1. Sort ['orange', 'apple', 'banana'] alphabetically
$fruits = ['orange', 'apple', 'banana'];
sort($fruits);

echo "Sorted fruits: ";
print_r($fruits);

// 2. Sort ['c'=>3, 'a'=>1, 'b'=>2] by keys
$data = ['c' => 3, 'a' => 1, 'b' => 2];
ksort($data);

echo "Sorted by keys: ";
print_r($data);

?>


