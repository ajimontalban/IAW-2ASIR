<?php
$anio=$_GET['ope1'];

if (($anio % 400) == 0)
    echo "<p> El año $anio es bisiesto!";
else if ((($anio % 4) == 0)and (($anio % 100) != 0))
    echo "<p> El año $anio es bisiesto!";
else
    echo "<p> El año $anio no es bisiesto!";


?>
