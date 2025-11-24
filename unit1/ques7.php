
<!-- 1.7 Initialize $score = 0 and update it by adding 100, subtracting 25, then doubling the result using compound assignment operators, echoing after each step. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $score=0;
    echo "Score 1: $score <br>";
    $score +=100;
    echo "Score 2: $score <br>";
    $score -=25;
    echo "Score 3: $score <br>";
    $score *=2;
    echo "Score 4: $score <br>";
    
    ?>
</body>
</html>