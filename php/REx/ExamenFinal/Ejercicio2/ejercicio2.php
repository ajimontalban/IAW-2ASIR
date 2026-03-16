<?php
$n = $_GET['n'];

function es_primo($n){
    for($i=2;$i<$n;$i++){
        if($n%$i == 0)
            exit;
    }
    return 1;
}

function capicua($n){
    $cociente = $n;
    $num = 0;
    while($cociente>=10){ 
        $resto = $cociente%10;
        $num *= + $resto; 
        $cociente /= 10;
    }
    if($num == $n)
        return 1;
    else
        return 0;
}

$es_primo = es_primo($n);
if($es_primo == 1){
    $es_capicua = capicua($n);
    if($es_capicua == 1)
        echo "<p>El número $n es primo y capicúa</p>";
    
    else
        echo "<p>El número $n es primo pero no capicúa</p>";
}else
    echo "<p>El número $n no es primo ni capicúa</p>";
?>
