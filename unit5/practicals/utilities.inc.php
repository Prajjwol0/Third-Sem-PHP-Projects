<!-- 13. Write a PHP function in a file named utilities.inc.php that returns the size of a file in KB.
Include this file using require_once() and call the function on a file example.txt.
 -->

 <!-- utilities.inc.php  -->
<?php
function getFileSizeKB($filename)
{
    if (file_exists($filename)) {
        return filesize($filename) / 1024; // convert bytes to KB
    } else {
        return 0;
    }
}
?>