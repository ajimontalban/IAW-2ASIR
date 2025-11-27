<?php
$n = $_GET['ope1'];

if (! preg_match('/^[0-9]+$/', $n)){
    echo "<p> Introduce un número entero positivo </p>";
    exit(1);
}

$cociente=$n;
$resto = 0;
while ( $cociente >= 1){
    $resto+= ($cociente % 10);
    $cociente/= 10;
}

echo "<p> La suma de los dígitos de $n es igual a: $resto </p>";
?>
