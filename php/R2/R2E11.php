<?php
$num1=rand(0,100);
$num2=rand(0,100);
$num3=rand(0,100);

$arr=array($num1,$num2,$num3);
sort($arr);

echo "<p> El número mas pequeño es: $arr[0].</p>";
echo "<p> Los numeros son:". implode(',',$arr) ." </p>";
?>
