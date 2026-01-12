<!-- 12. Create a script that tries to read a non-existent file using readfile(). Use try...catch with
Exception to handle the error gracefully. Display “File could not be loaded” to the user.
 -->

<?php

try {
    $filename = "nofile.txt";

    // Try to read the file
    if (!readfile($filename)) {
        // If readfile fails, throw an exception
        throw new Exception("File error");
    }

} catch (Exception $e) {
    // Graceful error message for user
    echo "File could not be loaded";
}

?>