<!-- 9. Write a PHP script that counts the number of actual files (not folders) in a folder named
documents using is_file(). Display the count. -->

<?php
$fileCount = 0;
$folder='.'; //Current folder
if(!is_dir($folder)){
    echo "Folder doesnt exists";
} else {
    $files = scandir($folder);
    foreach($files as $file){
        $files = scandir($folder);
    if(is_file($folder . '/' . $file)) {
        $fileCount++;

    } 
    }
    echo "Total files: $fileCount"; 
}

?>