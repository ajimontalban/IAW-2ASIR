
<?php
function comprobacion($a,$b){
    if ( ! preg_match('/^[1-9][0-9]*$/',$a) ||  ! preg_match('/^[1-9][0-9]*$/',$b)){
        echo "<p> Ambos numeros deben ser enteros mayores a 0 </p>";
        exit(1);
    }else
        return 0 ;
}

function es_divisor($n,$d){
    $resto = $n % $d;
    return $resto == 0;
}

function suma_divisores($num){
    $suma = 0;
    for ($divisor=1;$divisor<$num;$divisor++){
        if (es_divisor($num,$divisor))
            $suma+=$divisor;
    }
    return $suma;
}

function es_perfecto($n){
    return (suma_divisores($n) == $n);
}
?>

<?php
$n = $_GET['n'];

if ($n < 1)
    echo "<p> Error! Solo números enteros mayores a 1 </p>";
else {
    $html = "El número $n ";
    if (! es_perfecto($n))
        $html .= "no ";
    $html .= "perfecto";
    echo $html;
}

?>
