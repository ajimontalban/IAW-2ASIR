<?php
$sueldo_bruto=$_GET['ope1'];
$retencion=$_GET['ope2'];

/* El sueldo neto es igual a multiplicar el sueldo 
   bruto por el resultado de restar a 1 la retencion
   en base 1 */
$sueldo_neto=$sueldo_bruto*(1-($retencion/100));

# mostramos los resultados
echo "<p> El sueldo bruto es: $sueldo_bruto € </p>";
echo "<p> La retención es: $retencion  % </p>";
echo "<p> El sueldo neto es: $sueldo_neto € </p>";

?>
