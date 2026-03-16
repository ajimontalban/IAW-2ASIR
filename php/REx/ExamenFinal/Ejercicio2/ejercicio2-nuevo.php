<?php
$n = $_GET['n'];

function esPrimo($n){
    $arr = [];
    for ($i = 1; $i <= $n; $i++){
        if ( $n % $i == 0)
            $arr[] = $i;
    }
    return (count($arr) == 2);
}

function capicua($n){
    $cociente = $n;
    $num = 0;
    while($cociente>=1){ 
        $resto = $cociente%10;
        $num = ($num * 10) + $resto; 
        $cociente /= 10;
    }
    echo "<p>El numero de entrada es $n y el numero dado la vuelta es $num</p>";
    return ($num == $n);
}

if(esPrimo($n) && capicua($n)){
    echo "<p>El número $n es primo y capicúa</p>";
}
elseif (esPrimo($n)){
    echo "<p>El número $n es primo pero no capicúa</p>";
}
elseif(capicua($n)){
    echo "<p>El número $n es capicúa pero no primo</p>";
}else
    echo "<p>El número $n no es primo ni capicúa</p>";
?>
