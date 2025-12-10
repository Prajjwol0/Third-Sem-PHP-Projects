<?php
// check if form was submitted and the variable exists
if(isset($_POST ['user_name'])){

    // Retrieve the value from the input named "user_name"
    $name=($_POST['user_name']); //Prevent XSS attacks
    echo "Hello, $name!";
}else{
    echo "No name recieved.";
}

?>