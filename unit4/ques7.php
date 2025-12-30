<!-- 4.7. Create a form asking "Which topics are you interested in?" with multiple checkboxes using the topics[] array syntax. The handler should loop through $_POST['topics'] and display all selected items -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Which topics are you interested in?</h3>
    <form action="" method="post">
        <input type="checkbox" name="topics[]" id="loop" value="loop">
        <label for="loop">Loop</label><br><br>

        <input type="checkbox" name="topics[]" id="op" value="operator">
        <label for="op">Operator</label><br><br>

        <input type="checkbox" name="topics[]" id="file" value="File Handeling">
        <label for="file">File Handeling</label><br><br>
            
        <input type="submit" value="Submit">
    </form>

     <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['topics'])) {
        echo "You selected: <ul>";
        foreach($_POST['topics'] as $topic){
             echo "<li>" .$topic . "</li>";
        }
    }
    }else {
        echo "You did not select any topic.";
    }

    ?>
</body>
</html>