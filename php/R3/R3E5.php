<?php
$numjugadas=$_GET['ope1'];

# variable contador
$i=0;

# Marcador es un array con dos números iniciados a 0
$marc=[0,0];
while ($i < $numjugadas){
    $tiradaj1=rand(1,6);
    $tiradaj2=rand(1,6);

    if ($tiradaj1 > $tiradaj2){
        $marc[0]++;
    } else if ($tiradaj2 > $tiradaj1){
        $marc[1]++;
    } else {
        continue;
    }
    $i++;
}
# Comprobación del marcador para ver quien ha ganado
if ($marc[0] == $marc[1]){
    echo "<p> El partido ha sido empate </p>";
} else {
    $ganador=array_search(max($marc),$marc);
    if ($ganador == 0){
        echo "<p> El ganador es el jugador 1";
    } else {
        echo "<p> El ganador es el jugador 2";
    }
}
echo "<p> El resultado del partido es: " . implode(':',$marc)." </p>";
?>
