<!-- 4.2. Create a contact form with fields for name, email, and message using the POST method. The handler should check if the request method is POST and then retrieve and display the submitted data. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="name" placeholder="Name" id=""> <br><br>
    <input type="email" name="email" placeholder="Email" id=""> <br><br>
    <textarea name="msg" id="" placeholder="Enter your message"></textarea> <br><br>
    <input type="submit" value="Submit">
  </form> 
  <?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    echo"Name:". $_POST['name'] . "<br><br>";
    echo"Email:". $_POST['email'] . "<br><br>";
    echo"Message:". $_POST['msg'] . "<br><br>";
  }
  ?>
</body>
</html>