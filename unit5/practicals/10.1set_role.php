<!-- 10. Create a script that sets a session variable role to admin and then checks on another page if
the user is an admin before displaying an “Admin Panel” link. If not, redirect to index.php. -->

<?php
session_start(); // Start the session

// set the session variable
$_SESSION['role'] = 'client';

echo "Role is set to ".$_SESSION['role']." <a href='10.2check_role.php'>Go to check page</a>";

?>