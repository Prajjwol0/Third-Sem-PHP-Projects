<!-- 4.8. Create a form with a <select> dropdown listing countries. The handler should retrieve and display the selected country value. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Country</title>
</head>
<body>

<h3>Select your country:</h3>

<form method="post">
    <select name="country">
        <option value="">--Select--</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['country']) && $_POST['country'] != "") {
        echo "You selected: " . htmlspecialchars($_POST['country']);
    } else {
        echo "No country selected.";
    }
}
?>

</body>
</html>
