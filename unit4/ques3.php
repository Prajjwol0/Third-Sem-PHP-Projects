<!-- 4.3. Create a single-file registration form with fields for username and email. When the form is submitted, re-display the form with the previously entered values still in the inputs.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="uName" id="" value="<?php if(isset($_POST['uName'])){echo $_POST['uName'];}?>" placeholder="Enter username">
<br><br>

          <input type="text" name="email" id="" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" placeholder="Enter email">
<br><br>

        <input type="submit" value="Click">
<br><br>

    </form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Username: ". $_POST['uName'];
    echo "<br>";
    echo "Email: ". $_POST['email'];
}
?>
</body>
</html>