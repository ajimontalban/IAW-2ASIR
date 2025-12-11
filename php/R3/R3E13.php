<?php
$n = $_GET['n'];

function serie_restos($n){
    $restos = array();
    $cociente=$n;
    while ($cociente >= 1){
        $restos[] = $cociente % 2;
        $cociente = intdiv($cociente,2);
    }
    return array_reverse($restos);
}

function binario($n){
    $a = serie_restos($n);
    $b=0;
    for ($i=0; $i < count($a);$i++){
        if ( isset($a[$i])){
            $b = $b*10+$a[$i];
        }else
            continue;
    }
    return $b;
}

$num_binario = binario($n);
echo "El número $n en base 2 es: $num_binario";
?>
