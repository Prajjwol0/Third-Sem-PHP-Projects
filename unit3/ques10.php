<!-- 10. Create a `DateTime` for today, add 3 days, and display the new date.
 -->

<?php
$date = new DateTime();   // today

$date->modify('+3 days'); // add 3 days

echo $date->format('Y-m-d'); // display the new date
?>
