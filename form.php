<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

<form action="form.php" method="GET">
    Name: <input type="text" name="name">
    <input type="submit">
</form>

<?php
$name = $_GET["name"];
echo "Velkommen " . $name . " Til php form opgave :) <br>";
echo " Du er allerede godt på vej " . $name . "!";
?>


</body>
</html>