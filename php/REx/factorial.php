<?php 
$n = $_GET['n'];

function factorial($n){
    $factorial = 1;
    for($i=$n;$i>0;$i--){
        $factorial = $factorial * $i;
    }
    return $factorial;
}
function factorial_recursivo($n){
    if($n == 0){
        return 1;
    }
    else
        return $n*factorial_recursivo($n-1);
}
$resultado_recursivo = factorial_recursivo($n);
$resultado = factorial($n);

echo $resultado_recursivo . "<br/>";
echo $resultado;

?>

