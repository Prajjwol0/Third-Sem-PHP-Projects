<!-- 4.2. Create a contact form with fields for name, email, and message using the POST method. The handler should check if the request method is POST and then retrieve and display the submitted data. -->

<html>
<form action="" method="post">
        <input type="text" name="name" id="" placeholder="name ">
    <input type="text" name="email" id="" placeholder="email">
    <textarea name="msg" placeholder="message" id=""></textarea>
    <input type="submit" value="press">
</form>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    echo $name .' '. $email .' '. $msg;

}


?>
