<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $a, $b, $c en metros
$a=1.5;
$b=2.7;
$h=3;
$acm=$a*100;
$bcm=$b*100;

// $v1 y $v2 en litros/segundos
$v1=$_GET['ope1'];
$v2=$_GET['ope2'];
$t=$_GET['ope3'];

// Formula del volumen del cubo es a*b*h
// volumen llenado=> t*(v1-v2)
// volumen llenado=> a*b*hllenada
// altura del agua (h) será=> h=(t*(v1-v2)/(a*b))
$h=(($t*($v1-$v2))/($acm*$bcm))*1e-3;
echo  "<p> La altura del agua pasados $t segundos será de "
    . "$h metros </p>";
?>

