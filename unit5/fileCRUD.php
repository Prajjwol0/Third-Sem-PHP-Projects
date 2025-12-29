<?php
$dir = "my_files/";


if (!is_dir($dir)) { // Ensure directory exists
    mkdir($dir);  //Make a new folder if not exists.
}

// --- CREATE ---
if (isset($_POST['create'])) {
    $name = htmlspecialchars($_POST['filename']);
    $content = $_POST['content'];
    file_put_contents($dir . $name . ".txt", $content);
    echo "<p><b>File '$name.txt' created!</b></p>";
}

// --- DELETE ---
if (isset($_GET['delete'])) {
    $fileToDelete = $dir . $_GET['delete'];
    if (file_exists($fileToDelete)) {
        unlink($fileToDelete); // Deletes the file
        echo "<p><b>File deleted successfully.</b></p>";
    }
}

// --- READ (Single File) ---
if (isset($_GET['read'])) {
    $fileToRead = $dir . $_GET['read'];
    if (file_exists($fileToRead)) {
        echo "<h3>Contents of " . $_GET['read'] . ":</h3>";
        echo "<pre>";
        readfile($fileToRead); // Outputs file content directly to buffer
        echo "</pre><hr>";
    }
}
?>

<form method="POST">
    <input type="text" name="filename" placeholder="File name" required>
    <textarea name="content" placeholder="File content"></textarea>
    <button type="submit" name="create">Create File</button>
</form>

<hr>

<h3>File List</h3>
<ul>
    <?php
    $files = scandir($dir);
    foreach ($files as $file) {
        // Skip current (.) and parent (..) directory markers
        if ($file !== "." && $file !== "..") {
            echo "<li>
                    $file 
                    | <a href='?read=$file'>Read</a> 
                    | <a href='?delete=$file' style='color:red;'>Delete</a>
                  </li>";
        }
    }
    ?>
</ul>