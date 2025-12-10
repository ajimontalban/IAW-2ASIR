<?php
function lanzamiento($n,&$serie){
    $serie = array(
        1 => 0, 
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0);
    for ($i=0;$i<$n;$i++){
        $valor = rand(1,6);
        $serie[$valor]++;
    }
}

?>
<?php
$n = $_GET['n'];

lanzamiento($n,$serie);
for ($i=1;$i<=6;$i++){
    $porcentaje=(($serie[$i]/$n)*100);
    echo "<p>Número de veces que ha salido la cara $i: $serie[$i] "
        . round($porcentaje,2) . "% de $n</p>";
}

?>
