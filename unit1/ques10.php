<!--1.10 Create variables $firstName, $middleName, and $lastName, concatenate them into $fullName, and echo a greeting like "Hello, [fullName]!".  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$firstName = "John";
$middleName = "Michael";
$lastName = "Doe";

$fullName = $firstName . " " . $middleName . " " . $lastName;

echo "Hello, $fullName!";
?>

</body>
</html>