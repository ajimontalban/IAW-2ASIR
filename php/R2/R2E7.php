<?php
$num1=$_GET['ope1'];
$num2=$_GET['ope2'];

if ($num1 > $num2)
    echo "<p> $num1 es mayor a $num2</p>";
else if ($num2 > $num1)
    echo "<p> $num2 es mayor a $num1</p>";
else
    echo "<p> Los numeros $num1 y $num2 son iguales</p>";
?>
