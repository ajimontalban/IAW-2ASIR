<?php
$numlimite=$_GET['ope1'];
if ( ! preg_match('/^[0-9]+$/',$numlimite )){
    echo "<p> El valor introducido no es un número </p>";
    exit(1);
}

$i = 1;
$suma=0;
while ($i <= $numlimite){
    $suma=$suma+($i**2);
#    echo "<p>  i=$i </p>";
#    echo "<p> suma=$suma </p>";
    $i++;
}
echo "<p>  La suma es: $suma </p>";
?>
