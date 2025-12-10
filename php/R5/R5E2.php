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
    echo "<p>Número de veces que ha salido la cara $i: $serie[$i] "
        . $porcentaje=(($serie[$i])/6) . "</p>";
}

?>
