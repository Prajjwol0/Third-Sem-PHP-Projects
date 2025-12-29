
<!-- Example 3: Deleting a File with unlink() -->

<?php
$filename = "example.txt";

if(file_exists($filename)){
    unlink($filename);
    echo "File deleted successfully";
} else {
    echo "File not found";
}

?>