<!-- 3. Use scandir() to list all files in the images folder and display only files that have a .jpg extension. -->

<?php
$folder="images";
$files=scandir($folder);

foreach ($files as $file){
    if(pathinfo($file, PATHINFO_EXTENSION)== "jpg"){
        echo $file."<br>";
    }
}
?>      