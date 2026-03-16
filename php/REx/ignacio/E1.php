<html>
<head> 
    <title> Ejercicio 1 </title>
</head>
<body>
<h1>Ejercicio uno</h1>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];

if ($a == 0){
    echo "<p> No se puede dividir por 0 </p>";
    exit(1);
}

if ((pow($b,2) - 4*$a*$c) < 0 )
    echo "<p>Error: La ecuación de segundo grado no tiene solución real </p>";
else{
    $r1 = (-1*$b + sqrt(pow($b,2) - 4*$a*$c))/(2*$a);
    $r2 = (-1*$b - sqrt(pow($b,2) - 4*$a*$c))/(2*$a);
    echo "<p>Las soluciones para los coeficientes $a, $b y $c son: ". round($r1,2) ." y ". round($r2,2) ." </p>";
}

?>
</body>
</html>

