<!-- 7. Generate a random integer between 1 and 20 and round 5.678 to two decimal places.
 -->


 <?php 
 $int=rand(1,20);
 $float=5.678;
 echo  "Rounded Integer: ".round(2,$float);
 echo"<br>";
 echo "Random Number: ".$int;
 ?>