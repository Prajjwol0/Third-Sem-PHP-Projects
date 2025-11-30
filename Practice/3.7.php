
<!-- WAP to input your birthday & calculate passed days till today.  -->

<!-- 
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        DOB: <input type="date" name="dob" required>
        <input type="submit">
    </form>
</body>

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $birthday = $_POST['dob'];          
    $birthDate = new DateTime($birthday);
    $today = new DateTime();
    
    $aliveDay = $birthDate->diff($today); 

    echo "You are alive for " . $aliveDay->days . " days.";
}
?>

</html>
