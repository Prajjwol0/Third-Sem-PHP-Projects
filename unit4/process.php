
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];

    if(empty($name)){
        echo "Name is required";
        exit;
    }
    $name=htmlspecialchars($name);
    echo "Hi ".$name;

}
?>