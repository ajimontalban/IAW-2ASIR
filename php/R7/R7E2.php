<?php
$entrada = $_GET['ent'];
$prueba = "Esto es un string de prueba, hola mundo";
function mi_strpos($texto,$subcadena){
    for($i=0;$i<strlen($texto);$i++){
        $cad = "";
        for($j=0;$j<strlen($subcadena);$j++){
            $cad .= $texto[$i+$j];
        }
        if($cad == $subcadena){
            return $i;
            break;
        }
    }
    return false;
}

function mi_strpos2($texto,$subcadena){
    $encontrada = 0;
    $subcadlen = strlen($subcadena);
    for($i=0;$i<strlen($texto);$i++){
        for($j=0;$j<$subcadlen;$j++){
            if($texto[$i+$j] =! $subcadena[$j])
                break;
            elseif($j == ($subcadlen - 1))
                $encontrada = 1;
        }
        if($encontrada == 1){
            return $i;
        }
    }
    return false;
}
$inicio1 = microtime(true);
$fun1 = mi_strpos($prueba,$entrada);
$fin1 = microtime(true);
#$inicio2 = microtime(true);
#$fun2 = mi_strpos2($prueba,$entrada);
#$fin2 = microtime(false);
$tiempofun1 = $fin1 - $inicio1; 
#$tiempofun2 = $fin2 - $inicio2; 
echo "<p>Posición de la primera funcion: $fun1 , calculado en $tiempofun1</p>";
#echo "<p>Posición de la segunda funcion: $fun2 , calculado en $tiempofun2</p>";
?>
