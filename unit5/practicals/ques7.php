<!-- 7. Write a script that moves an uploaded file from a temporary folder to uploads/secure/. Ensure the script only accepts .png files and checks for write permissions -->

<?php
if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    $targetDir = 'uploads/secure'; 

    $fileExtention = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if($fileExtention !== 'png') {
        echo "Only  PNG files are allowed";
        exit;
    }

    if(!is_writable($targetDir)) {
        echo "Upload directory is not writable";
        exit;
    }

    $destination = $targetDir . basename($file['name']);
      if (move_uploaded_file($file['tmp_name'], $destination)) {
        echo "File uploaded successfully!";
    } else {
        echo "Failed to move the file!";
    }
} else {
    echo "No file uploaded!";
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>
