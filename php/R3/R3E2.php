<?php
$num1=$_GET['ope1'];

if ($num1 <= 0 ||  ! preg_match('/^[0-9]+$/', $num1)) {
    echo "<p> El número debe ser un entero mayor a 0";
    exit(1);
}

$arr=[];
for ($i=0;$i <=20; $i++){
    $multiplo=$num1*$i;
    $arr[]=$multiplo;
}

echo "<p> Los múltiplos de $num1 son: " . implode(',', $arr) . "</p>";
   
?>
