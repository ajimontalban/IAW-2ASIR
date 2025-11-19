<?php 
$dividendo=$_GET['ope1'];
$divisor=$_GET['ope2'];

if (! preg_match('/^[1-9][0-9]*$/', $dividendo) || ! preg_match('/^[1-9][0-9]*$/', $divisor)){
    echo "<p> Los valores introducidos deben ser números enteros mayores a 0";
    exit(1);
}

$cociente=0;
$resto=$dividendo;
while ($resto >= $divisor){
    $resto=$resto-$divisor;
    $cociente++;
}

echo "<p> El resultado de la división: $dividendo / $divisor = $cociente  "
    . "con resto = $resto</p> ";
?>
