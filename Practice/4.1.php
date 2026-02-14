<!-- 4.1. Create an HTML form with a single text input named query and a submit button using the GET method. The PHP script should retrieve the search query from $_GET and display: "You
searched for: [query]"
 -->

 <html>
    <form action="" method="GET">
        <input type="text" name="search" value="" placeholder="search">
        <input type="submit" value="press">
    </form>
 </html>

 <?php
 if($_SERVER['REQUEST_METHOD']=='GET'){
    $search = $_GET['search'];
    echo $search . ': your search';
 }
 ?>