
<!-- 15. Create a function `generateButton($text)` that prints an HTML button with the given text. -->

<?php
function generateButton($text) {
    echo '<button>' . htmlspecialchars($text) . '</button>';
}

// Example usage:
generateButton("Click Me");
?>
