
<!-- Header.php -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
 
    <?php
    // index.php
    // Include header (optional: page still works if missing)
    include 'includes/header.php';


    // Require functions (mandatory: script stops if missing)
    include 'includes/functions.php';


    // Using the function from included file
    echo "<br>". greet("Ram");
    ?>
 </body>
 </html>