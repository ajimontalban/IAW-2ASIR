<?php 
$num1=$_GET['ope1'];
$num2=$_GET['ope2'];

if (! preg_match('/^[0-9]+$/', $num1) || ! preg_match('/^[0-9]+$/', $num2)){
    echo "<p> Los valores introducidos deben ser números enteros no negativos";
    exit(1);
}

$i=0;
$result=0;
while ($i< $num1){
    $result=$result+$num2;
    $i++;
}

echo "<p> El resultado de la multiplicación: $num1 x $num2 = $result </p> ";
?>
