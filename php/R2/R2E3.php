<?php
$nota=$_GET['ope1'];

if ($nota<0 or $nota >10)
    echo "<p> La nota $nota está fuera del rango [0-10]";
else if ($nota < 5)
    echo "<p> La nota $nota es suspenso";
else
    echo "<p> La nota $nota es aprobado";
?>
