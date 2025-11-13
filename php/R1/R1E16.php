<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a=1.5;
$b=2.7;
$h=3;
$v1=$_GET['ope1'];
$v2=$_GET['ope2'];
$porcentaje_tanque=$_GET['ope3'];

// Formula del volumen del cubo es a*b*h
// Volumen total del cubo en m³
$volumen_total=$a*$b*$h;

// Volumen objetivo pasado a cm³
$vol_objetivo=($volumen_total*($porcentaje_tanque/100))*1e6;
$t=$vol_objetivo/($v1-$v2);
echo  "<p> El tiempo que tardamos en llenar el cubo a un porcentaje de "
    . " $porcentaje_tanque% es aproximadamente de " . round($t,2) ." segundos.</p>";
?>

