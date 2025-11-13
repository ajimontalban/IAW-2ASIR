<?php
$num1=$_GET['ope1'];
$num2=$_GET['ope2'];

if ($num2 == $num1)
    echo "<p> Los numeros $num1 y $num2 son iguales</p>";
else
    echo "<p> Los numero $num1 y $num2 son distintos</p>";
?>
