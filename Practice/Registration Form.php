<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            font-size: 28px;
            border: none;
        }

        body {
            background-color: green;
        }
        body:hover{
            background-color: cyan;
            color: white;
            
        }

        form {
            background-color: cyan;
            padding: 10px;

        }
        form:hover{
            background-color: green;
            color: white;
        }

        h2 {
            color: red;
        }

        input {
            margin: 10px;
            background-color: pink;

        }

        #but {
            background-color: red;
        }
        #but:hover{
            background-color: orange;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h2>Registration Form</h2>
        <input type="text" name="name" placeholder="Enter Full Name" id="name" required> <br>
        <input type="email" name="email" placeholder="Enter Email" id="email" required><br>
        Male <input type="radio" name="gender" value="gender" id="gender" required>
        Female<input type="radio" name="gender" value="gender" id="gender" required> <br>
        DOB<input type="date" name="dob" id="" id="dob" required> <br>
        <input type="submit" value="Submit" name="Submit" id="but">

    </form>
  
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name=$_POST['name'];
        echo "  Registration Done!! $name";
    }
    ?>
</body>

</html>

