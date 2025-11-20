<?php 
$base=$_GET['base'];
$exponente=$_GET['exponente'];

if ( ! preg_match('/^[1-9][0-9]*$/', $base) || ! preg_match('/^[1-9][0-9]*$/', $exponente)){
    echo "<p> Debes introducir un número entero mayor a 0";
    exit(1);
}

$i=0;
$potencia=1;
while ($i < $exponente){
    $potencia*=$base;
    $i++;
}

echo "<p>El tesultado de la potencia: $base^$exponente = $potencia </p>";
?>
