<?php
$uploadDir = __DIR__ . '/../uploads/images';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (in_array($_FILES ['image']['type'], $allowedTypes)) {

            $fileName = basename($_FILES['image']['type']);
            $targetPath = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                echo "File uploaded securely!";
            } else {
                echo "Upload failed. Check permissions.";
            }
        } else {
            echo "Only image files are allowed.";
        }
    }
}


?>