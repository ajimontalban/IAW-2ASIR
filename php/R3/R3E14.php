<?php
$n = $_GET['n'];

function serie_restos($n){
    $restos = array();
    $cociente=$n;
    while ($cociente >= 1){
        $restos[] = $cociente % 16;
        $cociente = intdiv($cociente,16);
    }
    return array_reverse($restos);
}

function binario($n){
    $a = serie_restos($n);
    $b='';
    for ($i=0; $i < count($a);$i++){
        if ( isset($a[$i])){
            switch ($a[$i]){
            case 10:
                $b.='A';
                break;
            case 11:
                $b.='B';
                break;
            case 12:
                $b.='C';
                break;
            case 13:
                $b.='D';
                break;
            case 14:
                $b.='E';
                break;
            case 15:
                $b.='F';
                break;
            default:
                $b.="$a[$i]";
                break;
            }
        }else
            continue;
    }
    return $b;
}

$num_binario = binario($n);
echo "El número $n en base 16 es: 0x$num_binario";
?>
