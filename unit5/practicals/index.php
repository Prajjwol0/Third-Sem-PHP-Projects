
<!-- 13 number continue -->

<?php
require_once("utilities.inc.php");

$filename = "example.txt";

$size = getFileSizeKB($filename);

if ($size > 0) {
    echo "File size: " . round($size, 2) . " KB";
} else {
    echo "File not found"; 
}
?>