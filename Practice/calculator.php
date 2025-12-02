<!-- Make a calculator app -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="firstNumber" placeholder="Enter first number" required>
        <br><br>
        <input type="text" name="secondNumber" placeholder="Enter second number" required> <br>
        <select name="operator" id="" required>
            <option value="">Enter operator</option>
            <option value="add">+ (Addition)</option>
            <option value="subtract">- (Subtraction)</option>
            <option value="multiply">* (Multiply)</option>
            <option value="division">/ (Division) </option>
        </select>
        <input type="submit" value="Submit" name='submit'>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $fNum = $_POST['firstNumber'] ;
        $sNum = $_POST['secondNumber'];
        $op = $_POST['operator'];
        switch ($op) {
            case 'add':
                echo "Result:" . ($fNum + $sNum);
                break;
            case 'subtract':
                echo "Result:" . ($fNum - $sNum);
                break;
            case 'multiply':
                echo "Result:" . ($fNum * $sNum);
                break;
            case "division":
                if ($sNum == 0) {
                    echo "Cannot divide with 0";
                    
                } 
                else {
                    echo "Result:" . ($fNum / $sNum);
                    
                }
                break;
            default:
                echo "Please select a valid operator";

        }
    }

    ?>

</body>

</html>