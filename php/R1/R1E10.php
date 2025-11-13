<?php
$segundos=$_GET['ope1'];
$horas=(int) ($segundos / 3600);
$resto_horas= $segundos % 3600;
$minutos=(int) ($resto_horas / 60);
$resto_segundos= $resto_horas % 60;

echo "<p> $segundos segundos introducidos se transforman en $horas:$minutos:$resto_segundos </p>";
?>
