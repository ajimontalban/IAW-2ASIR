<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];

function ecuacion_2grado($a,$b,$c,&$r1,&$r2){
    $r1 = (-1*$b + sqrt(pow($b,2) - 4*$a*$c))/(2*$a);
    $r2 = (-1*$b - sqrt(pow($b,2) - 4*$a*$c))/(2*$a);
}

?>
