<?php
function jugada($n, &$lanzamiento_A,&$lanzamiento_B,&$lanzamiento_Resultado,&$marcador){
    for($i=0;$i<$n;$i++){
        $lanzamiento_A[$i] = rand(1,6);
        $lanzamiento_B[$i] = rand(1,6);
        if($lanzamiento_A[$i] > $lanzamiento_B[$i]){
            $lanzamiento_Resultado[$i] = 'A';
            $marcador[0]++;
        }elseif($lanzamiento_A[$i] < $lanzamiento_B[$i]){
            $lanzamiento_Resultado[$i] = 'B';
            $marcador[1]++;
        }else
            $lanzamiento_Resultado[$i] = 'E';
    }
}

function cara_dado($arr){
    for($i=1;$i<=6;$i++){
        if(! in_array($i,$arr))
           $caras[] = $i; 
    }
    return $caras;
}

function mostrar($n,$lanzamiento_A,$lanzamiento_B,$lanzamiento_Resultado,$marcador){
    $html = "<table border='1'><tr><th colspan='4'>Partida de Dados</th></tr>";
    $html .= "<tr><th>Ronda</th><th>Jugador A</th><th>Jugador B</th><th>Resultado</th></tr>";
    for($i = 0;$i < $n;$i++){
        $html .= "<tr><td>Tirada $i</td><td>". $lanzamiento_A[$i] ."</td><td>"
            . $lanzamiento_B[$i]. "</td><td>" 
            . $lanzamiento_Resultado[$i] . "</td></tr>";
    }
    if($marcador[0] > $marcador[1])
        $resultado = 'A';
    elseif($marcador[0] < $marcador[1])
        $resultado = 'B';
    else
        $resultado = 'E';

    $html .= "<tr><td>Total</td><td>". $marcador[0] ."</td><td>"
        . $marcador[1] ."</td><td>$resultado</td></tr>";
    echo $html .= "</table>";

    $carasA = cara_dado($lanzamiento_A);
    $carasB = cara_dado($lanzamiento_B);

    $html = "<table border='1'><tr><th colspan='2'>Caras No Mostradas</th></tr>";
    $html .= "<tr><td>Jugador A</td><td>" . implode(', ',$carasA) . "</td></tr>";
    $html .= "<tr><td>Jugador B</td><td>" . implode(', ',$carasB) . "</td></tr>";
    echo $html .= "</table>";
}

?>
<?php
$n_jugadas = $_GET['n'];
$marcador = [0,0];
$jugadorA = [];
$jugadorB = [];
$Resultado = [];
jugada($n_jugadas,$jugadorA,$jugadorB,$Resultado,$marcador);
mostrar($n_jugadas,$jugadorA,$jugadorB,$Resultado,$marcador); 
?>
