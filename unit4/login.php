<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" id="" placeholder="Enter Your name."><br>
        <input type="number" name="age" id="" placeholder="Enter Your age."><br>
        <input type="email" name="email" id="" placeholder="Enter Your email"><br>
        <input type="text" name="url" id="" placeholder="Enter Your url"><br>
        <input type="text" name="demo" id="" placeholder="Sanitized text"><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $demo=htmlspecialchars($_POST['demo']);
         $name=$_POST['name'];
        $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
      $url=filter_var($_POST['url'],FILTER_VALIDATE_URL);
      $age=filter_var($_POST['age'],FILTER_VALIDATE_INT);
echo "Entered Inputs: <br>".$name ."<br>".$age."<br>".$email."<br>".$url."<br>".$demo;
    }
    ?>
</body>
</html>