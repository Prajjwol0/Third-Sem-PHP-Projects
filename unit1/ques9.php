<!-- 1.9 Write a PHP script that declares $isLoggedIn = true; and $isAdmin = false; and use var_dump() to check conditions with && and ||.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $isLoggedIn=true;
    $isAdmin=false;

    var_dump($isLoggedIn || $isAdmin);
    echo "<br>";
    var_dump($isLoggedIn && $isAdmin);
    ?>

</body>
</html>

