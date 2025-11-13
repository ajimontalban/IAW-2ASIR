<?php
$fahrenheit=$_GET['ope1'];
$celsius=($fahrenheit - 32) * 5 / 9;

echo "<p> $fahrenheit grados fahrenheit introducidos se transforman en " . round($celsius,2) . " grados celsius</p>";
?>
