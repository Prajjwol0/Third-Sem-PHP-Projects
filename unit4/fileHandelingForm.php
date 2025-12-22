<?php
// ================================
// File Upload Handling
// ================================


// Variable to store feedback message
$message = '';

// Variable to store uploaded file path
$uploaded_file = '';

// Check if form was submitted
if (isset($_POST['submit'])) {

    // Check if file input exists and no upload error occurred
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {

        // Get uploaded file details
        $file_name = $_FILES['upload']['name'];     // Original file name
        $file_size = $_FILES['upload']['size'];     // File size in bytes
        $file_tmp  = $_FILES['upload']['tmp_name']; // Temporary file location
        $file_type = $_FILES['upload']['type'];     // MIME type (browser-provided)

        // Allowed File types
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        // Validate file size (max 2MB)
        if ($file_size > 2097152) {
            $message = "Error: File size exceeds 2 MB.";
        }
        // Validate file type
        elseif (!in_array($file_type, $allowed_types)) {
            $message = "Error: Only JPG, PNG, GIF files are allowed.";
        }   
        else {

            // Create uploads folder if it does not exist
            if (!is_dir('Uploads')) {
                // 0777 allows full permissions (note: not recommended for production)
                mkdir('Uploads', 0777, true);
            }   

            // Set destination path
            // basename() prevents directory traversal
            $destination = 'uploads/' . basename($file_name);

            // Move uploaded file from temp folder to uploads folder
            if (move_uploaded_file($file_tmp, $destination)) {
                $message = "Upload successful!";

                // Store uploaded file path for display
                $uploaded_file = $destination;
            } else {
                $message = "Error: Could not save the file.";
            }
        }
    } else {
        // Triggered if no file selected or upload error occurred
        $message = "Error: No file uploaded or there was an upload error.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Single File Uploade Example</title>
</head>
<body>

<h2>Upload An Image (2mb Max)</h2>

<!-- ================================================= -->
<!-- File Upload Form -->
<!-- ================================================= -->
<!-- enctype="multipart/form-data" is REQUIRED for file uploads -->
<form action="" method="POST" enctype="multipart/form-data">

    <!-- Client-side max file size hint (server must still validate) -->
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">

    <fieldset>
        <legend>Select an image to upload:</legend>

        <p>
            <strong>Choose File:</strong>
            <input type="file" name="upload" accept="image/*">
        </p>

        <p style="color: gray; font-size: 0.9em">
            Supported types: JPG, PNG, GIF, MAX size: 2 MB.
        </p>
    </fieldset>

    <div align="center">
        <input type="submit" name="submit" value="Upload">
    </div>
</form>

<!-- ================================================= -->
<!-- Feedback Section -->
<!-- ================================================= -->

<?php if (!empty($message)): ?>
    <h3>Result:</h3>

    <!-- Escape output to prevent XSS -->
    <p><?= htmlspecialchars($message) ?></p>

    <!-- 
        BUG NOTE:
        Variable below should be $uploaded_file
        but original code checks $upload_file
    -->
    <?php if (!empty($upload_file)): ?>

        <p>Uploaded file:</p>

        <!-- 
            BUG NOTE:
            "stype" should be "style"
        -->
        <img src="<?= htmlspecialchars($uploaded_file) ?>" alt="Uploaded Image" stype="max-width:300px;">

    <?php endif; ?>
<?php endif; ?>

</body>
</html>
