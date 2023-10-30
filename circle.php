<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circle.php" method="post">
        <label>Radius:</label>&nbsp;
        <input type="text" name="radius"><br><br>
        <input type="submit" value="calculate">
    </form><br>
</body>
</html>
<?php
$radius = $_POST["radius"];
$circumference=null;
$area = null;
$volume=null;
$circumference = 2*pi()*$radius;
$circumference = round($circumference,3);
$area=pi()* pow($radius,2);
$area=round($area,3);
$volume=4/3 * pi()*pow($radius,3);
$volume=round($volume ,3);
echo "CIRCUMFERENCE = {$circumference} m <br>";
echo "Area of the circle = {$area} m^2<br>";
echo "Volume = {$volume} m^3<br>";
?>