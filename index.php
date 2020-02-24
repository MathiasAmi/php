<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./layout.css">
</head>
<body>
    

<?php


echo "The result of values in URL = ";

$a = $_GET["a"];
$b = $_GET["b"];
$operation = $_GET["operation"];


switch ($operation) {
    case "plus";
        echo $a + $b;
break;
    case "minus";
        echo $a - $b;
break;
    case "divided";
        echo $a / $b;
break;
    case "multiply";
        echo $a * $b;
}


echo "<br>";

echo "An example of an URL: http://localhost:3000/?a=10&b=2&operation=plus";

echo "<br>";

echo "Hello World";

echo "<br>";

$a = 12;
$b = 13;

echo "12 + 13 = ", $a + $b;

?>


</body>
</html>