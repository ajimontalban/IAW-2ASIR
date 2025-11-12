<?php
$pera_euro_kilo=1.2;
$manzana_euro_kilo=0.9;
$kilo_pera=3;
$kilo_manzana=2.5;
$precio_manzana=$manzana_euro_kilo * $kilo_manzana;
$precio_pera=$pera_euro_kilo * $kilo_pera;
echo "<p> El kilo de peras cuesta: $pera_euro_kilo euros</p>";
echo "<p> El kilo de manzanas cuesta: $manzana_euro_kilo euros</p>";

echo "<p> Las manzanas me han costado: $precio_manzana euros</p>";
echo "<p> Las peras me han costado: $precio_pera euros</p>";
echo "<p> La compra total me ha costado: " . $precio_compra=$precio_pera + $precio_manzana . " euros</p>";

?>
