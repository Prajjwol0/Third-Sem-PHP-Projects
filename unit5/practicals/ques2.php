<!-- 2. Create a script that checks if a file named report.pdf exists. If it does, display
“File Found”; otherwise, display “File Not Found.” -->

<?php
$fileName='report.pdf';
if(FILE_EXISTS($fileName)){
    echo "FILE FOUND";
} else {
    echo "File not found";
}
?>