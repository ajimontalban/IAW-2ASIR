<?php
$centimos=$_GET['ope1'];
$euros_2=(int) ($centimos / 200);
$resto_euros2= $centimos % 200;
$euros_1=(int) ($resto_euros2 / 100);
$resto_euros1= $resto_euros2 % 100;
$centimos_50=(int) ($resto_euros1 / 50);
$resto_centimos50= $resto_euros1 % 50;
$centimos_20=(int) ($resto_centimos50 / 20);
$resto_centimos20= $resto_centimos50 % 20;
$centimos_10=(int) ($resto_centimos20 / 10);
$resto_centimos10= $resto_centimos20 % 10;
$centimos_5=(int) ($resto_centimos10 / 5);
$resto_centimos5= $resto_centimos10 % 5;
$centimos_2=(int) ($resto_centimos5 / 2);
$resto_centimos2= $resto_centimos5 % 2;
echo "<p> $centimos centimos introducidos se transforman en :<br>"
    . "$euros_2 monedas de 2€, $euros_1 monedas de 1€, $centimos_50 monedas "
    . "de 50 cent., $centimos_20 monedas de 20 cent., $centimos_10 monedas "
    . "de 10 cent., $centimos_5 monedas de 10 cent., $centimos_2 monedas de "
    . "2 cent. y $resto_centimos2 monedas de 1 cent.</p>";
?>
