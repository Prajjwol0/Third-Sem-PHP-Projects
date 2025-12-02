<!--

 Create a page with input field where user enters their name & using PHP create (Generate) username using
 users first names first 3 letters and last name first 3 ketters. Echo the username
 Eg: Shyam Thapa
 Output: ShyaTha

 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form method="post" >
      <input type="text" name="firstName" placeholder="Enter FirstName Name" required> <br> <br>
    <input type="text" name="secondName" placeholder="Enter Second Name" required> <br> <br>
    <input type="submit" name="generate" value="Generate" />
    </form>
   

    <?php 
    if(isset($_POST['generate']))
    {
      $fName=$_POST['firstName'];
      $sName=$_POST['secondName'];
      $firstUser= substr(str_replace(" ","",$fName),0,3);
      $secondUser=substr(str_replace(" ","",$sName),0,3);
      echo $firstUser.$secondUser;
    }
    ?>


 </body>
 </html>