<!-- 6. Convert the string `"tag1,tag2,tag3"` to an array and back to `"tag1 | tag2 | tag3"`. -->


<?php

$str = "tag1,tag2,tag3";

// Convert string to array
$arrStr = explode(",", $str);

echo "Array: ";
print_r($arrStr);

// Convert array to string
$newStr = implode(" | ", $arrStr);

echo "String: " . $newStr;
?>
