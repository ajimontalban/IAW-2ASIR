
<?php
function potencia($b,$e,&$resultado){
    $resultado = 1;
    for ($i=1;$i <= $e;$i++){
       $resultado*=$b; 
    }
}

function num_digitos($x){
    $contador = 0;
    do{
        $x = intdiv($x, 10);
        $contador++;
    }
    while ($x > 0);
    return $contador;
}

function es_narcisista($x){
    $x_copia = $x;
    $exponente = num_digitos($x);
    $suma = 0;
    while ($x > 0) {
        $digito = $x % 10;
        potencia($digito, $exponente, $resultado);
        $suma += $resultado;
        $x = intdiv($x, 10);
    }
    return ($suma == $x_copia);
}
?>

<?php
$num=$_GET['num'];

if (es_narcisista($num))
    echo "Si";
else
    echo "No";

?>
