<?php
$cadena = $_GET['cad'];

function mi_strlen($cadena){
    $contador = 0;
    while(isset($cadena[$contador]))
        $contador++;
    return $contador;
}

$longitud = mi_strlen($cadena);
echo "La longitud de la cadena $cadena es: $longitud";
?>
