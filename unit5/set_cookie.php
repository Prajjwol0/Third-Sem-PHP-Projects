<?php
//  Set a cookie that expires in 7 days
setcookie("username", "Prajjwol", time() + (7 * 24*60*60), "/");

echo "Cookie has been set. <br>";
?>