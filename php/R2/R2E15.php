<?php
$anio=$_GET['ope1'];
$A = $anio % 19;
$B = $anio % 4;
$C = $anio % 7;
$D = (19*$A+24) % 30;
$E = (2*$B + 4*$C + 6*$D + 5) % 7;

$fecha = (22 + $D + $E);

    if (($fecha / 31) > 1){
        $fecha = $fecha % 31;
        echo "<p> La fecha del domingo de pascua es el dia $fecha de abril</p>";
        
    } else
        echo "<p> La fecha del domingo de pascua es el dia $fecha de marzo</p>";

?>
