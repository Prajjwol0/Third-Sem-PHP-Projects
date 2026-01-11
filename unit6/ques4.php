<!-- 4. Write a PHP script to delete a file called oldfile.txt using unlink(). Make sure the script first checks if the file exists. -->

<?php
$fileName='oldfile.txt';
if(FILE_EXISTS($fileName)){
    unlink($fileName);
    echo "File deleted";
} else {
    echo "File not exists.";
}
?>