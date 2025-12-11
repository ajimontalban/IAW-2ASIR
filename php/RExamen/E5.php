<?php
function esPrimo($n){
    $arr = [];
    for ($i = 1; $i <= $n; $i++){
        if ( $n % $i == 0)
            $arr[] = $i;
    }
    return (count($arr) == 2);
}

function num_aleatorio($a,$b){
    $arr = [];
    for ($i = $a; $i <= $b; $i++){
        do{
            $num = rand($a,$b);
            if (esPrimo($num))
                return $num;
        }while(isset($arr[$num]));
        $arr[$num] = true;
    }
    return false;
}
?>
<?php

$x = $_GET['x'];
$y = $_GET['y'];

if ($x <= 0 || $y <= 0 ){
    echo "Error: Debes introducir un número mayor a 0";
    exit(1);
}

$resultado = num_aleatorio($x,$y);
if ( $resultado != false )
    echo "<p>$resultado es un número primo dentro del rango $x e $y </p>";
else
    echo "<p>En el rango [$x-$y] no existen números primos";
?>
