<!-- 2.11 Use continue to skip printing odd numbers from 1–10. -->

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue; // skips odd numbers
    }
    echo "$i<br>";
}
?>
