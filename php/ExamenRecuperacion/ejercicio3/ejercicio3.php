<?php
function division($n){
    $div = $n;
    while($div >= 1){
        $resto[] = $div % 10;
        $div = floor($div/10);
    }
    return $resto;
}

function valle($arr){
    $minimo = min($arr);
    for($i=0;$i<count($arr);$i++){
        if($arr[$i] > $$arr[$i+1]){
        }
    }
}

$n = $_GET['numero'];

division($n);
?>
