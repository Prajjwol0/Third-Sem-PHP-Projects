
<!-- Print the array in ascending order -->

<?php

$arr=[3,34,45,1,2,9,8];

sort($arr);
foreach($arr as $sort){
    echo "$sort \n";
}
echo "<br>";
rsort($arr);
foreach($arr as $sort){
    echo "$sort \n";
}


?>

