<!-- 2.10 Use break to exit a loop early when a certain value is found.
 -->

 <?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Value 5 found. Exiting loop.<br>";
        break; // exits the loop immediately
    }
    echo "Current value: $i<br>";
}
?>
