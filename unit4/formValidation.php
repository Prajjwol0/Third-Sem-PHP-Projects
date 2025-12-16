<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST" onsubmit="return formValidation()">
        <input type="text" name="name" id="name" placeholder="Enter name">
        <button id="button" type="submit">Submit</button>
    </form>
    <p id="error" style="color:red;"></p>
    <script>
       function formValidation(){
            const name=document.getElementById("name").value.trim();
            if(name==""){
                document.getElementById("error").innerText="Name is required!!"
                return false;
            }
            else {
                return true;
            }
        }
    </script>
</body>
</html>