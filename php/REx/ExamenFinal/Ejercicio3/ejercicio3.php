<?php
function sacar_carta($n,&$arr){
    for($i=0;$i<$n;$i++){
        $arr[] = rand(0,39);
    }
}

function palo($arr,$arr_palo){
    // array para asignar valor
    $arr_final = [];
    for ($j=0;$j<count($arr);$j++){
        // floor($arr[$j] / 10)] sirve ya que la baraja son grupos de 10.
        // los num 0-9 daran 0, los 10-19 1 y asi sucesivamente.
        // Lo usamos para aprovechar el indice
        $arr_final[] = $arr_palo[floor($arr[$j] /10)];
    }
    return $arr_final;
}

function contador_palos($arr_numerico,$array_palos){
    // contador para repeticiones de ocurrencia
    $contador = 1;
    // marcador de cada uno de los palos
    $contador_palos = [0,0,0,0];
    for($i=0;$i<count($array_palos);$i++){
        // comprueba si el elemento actual es igual al elmento siguiente
        if($array_palos[$i] == $array_palos[$i+1])
            $contador++;
        // si no es igual, comprueba el valor del contador
        else{
            // solo suma si el contador cumple el umbral
            if($contador >= 3)
                $contador_palos[floor($arr_numerico[$i] / 10)]++;
            // resetea el contador para el siguiente
            $contador = 1;
        }        
    }
    return $contador_palos;
}

$n = $_GET['numero'];
$arr_palo = ['B','C','E','O'];
$arr = [];
sacar_carta($n,$arr);
$resultado = palo($arr,$arr_palo);
$numero_repeticiones = contador_palos($arr, $resultado);
echo implode(', ', $resultado) . "<br/>";    
for($i=0;$i<count($numero_repeticiones);$i++){
    echo "<p>Las veces que el palo ".$arr_palo[$i] . " aparece tres veces "
        . "seguidas o más es: " .$numero_repeticiones[$i] . "</p>";
}
?>
