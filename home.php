<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function machin($number1,$number2,$operator)
{
    switch($operator)
    {
        case "+":
            return $number1 + $number2;
        break;
        case "-":
            return $number1 - $number2;
        break;
        case "/":
            return $number1 / $number2;
        break;
        case "*";
            return $number1 * $number2;
        break;
        default:
        return "Not True this operator!";
    break;
    }
}
$num1 = 10;
$num2 = 5;
$op = "*";
echo machin($num1,$num2,$op);


?>
</body>
</html>