
<!-- 8. Format the number `1500000.5` as `"1,500,000.50"`. -->

<?php
$num = 1500000.5;

$formatted = number_format($num, 2, '.', ',');

echo $formatted;
?>
