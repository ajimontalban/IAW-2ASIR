<?php
function gen_array($n){
    $s = array();
    for ($i = 0; $i < $n; $i++){
        $s[] = rand(0,100);
    }
    return $s;
}

function recuento($s,&$par,&$impar){
    $par = 0;
    $impar = 0;
    foreach ($s as $i => $valor){
        if ($valor % 2 == 0)
            $par++;
        else
            $impar++;
    }
}

?>
<?php
$elementos = $_GET['n'];

$serie = gen_array($elementos);
recuento($serie,$par,$impar);


echo implode(' ', $serie);
echo "<br/>";
echo "<p> Número de elementos pares: $par </p>";
echo "<p> Número de elementos impares: $impar </p>";

?>
