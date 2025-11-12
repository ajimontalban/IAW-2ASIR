<?php
$num1=$_GET['ope1'];
$num2=$_GET['ope2'];

echo "<p>" . "variable1 = " . $num1 .  " y variable 2= " . $num2.  "</p>";

$placeholder=$num1;
$num1=$num2;
$num2=$placeholder;
echo "<p>" . "variable 1 cambiada = " . $num1 .  " y variable 2 cambiada = " . $num2.  "</p>";
?>
