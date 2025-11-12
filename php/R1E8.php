<?php
$radio=$_GET['num'];
const pi=3.14;
$perimetro=2*pi*$radio;
$volumen=(4*pi*($radio**3))/3;
echo "<p>  El radio introducido es: $radio cm </p>";
echo "<p>  El perimetro es: $perimetro cm²</p>";
echo "<p>  El volumen es: $volumen cm³</p>";
?>
