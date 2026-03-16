<html>
<head> 
    <title> Ejercicio 2 </title>
</head>
<body>
<h1>Ejercicio dos</h1>
<?php
$x=$_GET['x'];
$y=$_GET['y'];

$formula = (($x + $y)/($x * $y)) + 5*(($x * $y)/($x + $y));

echo "<p>El resultado es: ".round($formula,2) ." </p>";

?>
</body>
</html>

