<?php
function sumar_digitos($a){
    $suma = 0;
    while ($a > 0) {
        $resto = $a % 10;
        $suma += $resto;
        $a = intdiv($a, 10);
    }
    return $suma;
}

function digito_magico($a){

    while ($a > 9){
        $a = sumar_digitos($a);
    }
    return $a;
}

$num=$_GET['ope'];

if ($num < 0) {
    echo "Número mayor o igual a 0";
    return;
}

echo digito_magico($num);
?>
