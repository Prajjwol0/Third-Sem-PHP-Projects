

<!-- WAP to input your birthday & calculate passed days till today.  -->

<?php
$dob = "2005-11-15";  // example birthday (YYYY-MM-DD)

$birthDate = new DateTime($dob);
$today = new DateTime();

$diff = $birthDate->diff($today);

echo "Days passed since birthday: " . $diff->days . " days";
?>