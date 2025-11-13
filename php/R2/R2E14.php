<?php
$dist=$_GET['ope1'];
$est=$_GET['ope2'];

$pre_km=$dist*0.05;

if (($dist > 1000) and ($est > 7)) {
    $pre_total = ($pre_km*0.85);
    echo "<p> El precio del billete es de $pre_total € </p>";
}else {
    echo "<p> El precio deo billete es de $pre_km € </p>";
    
}
?>
