<!-- 4.5. Create a form with an email input. Use filter_var() with FILTER_VALIDATE_EMAIL to validate the submitted email and display a success or error message. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Enter username" name="uName">
        <input type="text" placeholder="Enter email" name="email">
        <input type="submit" value="Submit">
    </form>
    <?php
    $email=$_POST['email'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
         echo "Email format accepted!";
    } else {
       echo "Error email format";
    }
}
    ?>
</body>
</html>