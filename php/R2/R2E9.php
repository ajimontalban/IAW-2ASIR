<?php
$peso=$_GET['ope1'];
$edad=$_GET['ope2'];
$altura=$_GET['ope3'];

if ((($peso >= 90) and ($peso <=110)) and (($edad >= 18) and ($edad <= 22)) and ($altura > 190))
    echo "<p> El jugador ha sido seleccionado. </p>";
else
    echo "<p> El jugador no ha sido seleccionado. </p>";
?>
