<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$coefa=$_GET['ope1'];
$coefb=$_GET['ope2'];
$coefc=$_GET['ope3'];
$coordenada_x=$_GET['ope4'];
$coordenada_y=$_GET['ope5'];

// Formula de la recta es Ax+By+C=0 
// La formula de la distancia de un punto a la recta es
// d=|A*x+B*y+C|/(A**2+B**2)**0.5
$distancia=abs($coefa*$coordenada_x+$coefb*$coordenada_y+$coefc) / sqrt($coefa**2+$coefb**2);
echo  "<p> La distancia a la recta dada por A:$coefa, B:$coefb y C:$coefc"
    . " desde el punto ($coordenada_x,$coordenada_y) es: $distancia </p>";
?>

