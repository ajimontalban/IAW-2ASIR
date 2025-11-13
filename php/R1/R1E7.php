<?php
$num_huevos=700;

# tambien puedo hacer floor($num_huevos / 12)
$num_docenas=(int) ($num_huevos / 12);
$num_sueltos=$num_huevos % 12;
echo "<p> Teniendo $num_huevos, puedo formar $num_docenas y me sobran $num_sueltos</p>";

?>
