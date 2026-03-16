<?php
$n = $_GET['n'];

function fibonacci($numero){
    $numero = $numero - 1;
    $p = 0;
    $q = 1;
    for($i=0;$i < $numero;$i++){
        $num = $p + $q;
        $p = $q;
        $q = $num;
    }
    if($numero == 0)
        return $p;
    elseif($numero == 1)
        return $q;
    else
        return $num;
}

$resultado = fibonacci($n);
echo $resultado;

?>
