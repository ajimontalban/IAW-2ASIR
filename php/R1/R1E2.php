<?php
$num1=$_GET['ope1'];
$num2=$_GET['ope2'];
$num3=$_GET['ope3'];
$media=( $num1 + $num2 + $num3 ) / 3;
echo "<p>" . "La media de los números " . $num1 ." , " . $num2 ." y " .  $num3 ." es: " . $media . "</p>";
?>
