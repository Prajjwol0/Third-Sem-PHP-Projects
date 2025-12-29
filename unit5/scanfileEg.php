
<!-- Example 2: Listing Files in a Directory with scandir() -->

<?php
$directory = "../unit4";

$files = scandir($directory);

foreach ($files as $file){
    echo $file . "<br>";
}

?>