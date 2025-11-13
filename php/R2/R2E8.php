<?php
$num1=rand(0,100);
$num2=rand(0,100);
$num3=rand(0,100);

if ($num1 > $num2){
    $aux=$num1;
    $num1=$num2;
    $num2=$aux;
}
if ($num2 > $num3){
    $aux=$num2;
    $num2=$num3;
    $num3=$aux;
}
if ($num1 > $num2){
    $aux=$num1;
    $num1=$num2;
    $num2=$aux;
}
echo "<p> Los números ordenados son $num1, $num2, $num3</p>";
?>
