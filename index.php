<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Signup exercise </title>

</head>
<body>

<form action="includes/signup.inc.php" method="post" >
    <input type="text" name="username">
    <input type="password" name="pwd">
    <button>Signup</button>
</form>

<?php
    require_once 'Classes/Car.php';
    $car01 = new Car ("Bmw", "blue");
    echo $car01->setBrand("Volvo");
    $car01->setColor("yellow");
    echo $car01->getColor();
?>

</body>
</html>