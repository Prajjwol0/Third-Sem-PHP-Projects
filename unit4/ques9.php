<!-- 4.9. Create a form for uploading a profile picture. Validate that the uploaded file is PNG or JPG and less than 500KB. If valid, move it to an uploads/ directory; otherwise, display an appropriate error. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Profile Picture</title>
</head>
<body>

<h3>Upload your profile picture:</h3>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="profilePic" accept=".jpg,.jpeg,.png">
    <br><br>
    <input type="submit" value="Upload">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_FILES['profilePic']) && $_FILES['profilePic']['error'] == 0) {

        $fileName = $_FILES['profilePic']['name'];
        $fileTmp  = $_FILES['profilePic']['tmp_name'];
        $fileSize = $_FILES['profilePic']['size'];
        $fileExt  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowed = ['jpg', 'jpeg', 'png'];

        // Validate file type
        if (!in_array($fileExt, $allowed)) {
            echo "Error: Only JPG, JPEG, and PNG files are allowed.";
        }
        // Validate file size (< 500KB)
        elseif ($fileSize > 500 * 1024) {
            echo "Error: File size must be less than 500KB.";
        } else {
            // Ensure uploads/ directory exists
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            $destination = 'uploads/' . basename($fileName);

            if (move_uploaded_file($fileTmp, $destination)) {
                echo "File uploaded successfully to " . htmlspecialchars($destination);
            } else {
                echo "Error: Failed to move uploaded file.";
            }
        }

    } else {
        echo "Error: No file selected or file upload error.";
    }
}
?>

</body>
</html>
