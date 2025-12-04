<?php
function ha_salido($numeros, $n){
    for ($i=0; $i < count($numeros); $i++){
        if ($numero[$i] == $n)
            return True;
    }
    return False;
}

function generar_apuesta(&$apuesta){
    for ($i = 0; $i < 6; $i++){
        do {
            $n = rand(1,49);
        } while (ha_salido($apuesta, $n));
        $apuesta[$i] = $n;
    }
}

function generar_apuesta2(&$apuesta){
    $numeros = array();
    for ($i = 0; $i < 6; $i++){
        do {
            $n = rand(1,49);
        } while (isset($numeros[$n]));
        $numeros[$n] = True;
        $apuesta[$i] = $n;
    }
}
?>
<?php

$apuesta = array();
$apuesta2 = array();
generar_apuesta($apuesta);
generar_apuesta2($apuesta2);
echo implode(' ',$apuesta);
echo "<br/>";
echo implode(' ',$apuesta2);
?>
