<!-- 4.6. Create a form asking "What is your favorite programming language?" with radio buttons for PHP, JavaScript, and Python (same name). The handler should detect and display which option was selected. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="radio" name="language" value="PHP" id="php">
        <label for="php">PHP</label><br>
        <input type="radio" name="language" value="JavaScript" id="js">
        <label for="js">JavaScript</label><br>
        <input type="radio" name="language" value="Python" id="python">
        <label for="python">Python</label><br><br>

        <input type="submit" value="Submit">
    </form>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['language'])) {
        echo "You selected: " . htmlspecialchars($_POST['language']);
    } else {
        echo "You did not select any language.";
    }
}
?>

</body>
</html>