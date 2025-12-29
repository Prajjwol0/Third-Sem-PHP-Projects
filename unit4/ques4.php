<!-- 4.4. Create a form with a comment textarea. After submission, check if the comment is empty (or whitespace after trim()). If empty, display an error message; if not, display a success message.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="cmnt" id="" placeholder="Comment"></textarea>
        <input type="submit" value="Submit">
    </form>
    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!trim($_POST['cmnt'])  ){
        echo "Error!! Comment is empty";
    } else {
        echo "Comment successfully posted: ".$_POST['cmnt'];
    }
}
    ?>  
</body>
</html>

