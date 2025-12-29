<!-- 4.1. Create an HTML form with a single text input named query and a submit button using the GET method. The PHP script should retrieve the search query from $_GET and display: "You searched for: [query]" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" placeholder="Search" name="query">
        <button type="submit" name="submit">Click</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $search=$_GET['query'];
        echo"You searched for: $search";
    }
    ?>
</body>
</html>