<!-- 5. Create a page that sets a cookie called language with the value English that expires in 7 days. Display a message confirming the cookie is set. -->

<?php
setcookie('language','English', time()+(7*24*60*60));
echo "Language cookie has been set successfully.";
?>  