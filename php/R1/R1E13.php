<?php
$lado1=$_GET['ope1'];
$lado2=$_GET['ope2'];
$lado3=$_GET['ope3'];
$semiperimetro=($lado1 + $lado2 + $lado3)/2;
$area=($semiperimetro*($semiperimetro-$lado1)*($semiperimetro-$lado2)*($semiperimetro-$lado3))**0.5;

echo  "<p> El área del triangulo con lados "
    . "a=$lado1,b=$lado2 y c=$lado3 es: $area </p>";
?>

