<?php
$num1=$_GET['ope1'];

if ($num1 <= 0 ||  ! preg_match('/^[0-9]+$/', $num1)) {
    echo "<p> El número debe ser un entero mayor a 0";
    exit(1);
}

for ($i=0;$i <=10; $i++){
    $multiplicacion=$num1*$i;
    echo "<p> $num1 x $i = $multiplicacion </p>";
}

   
?>
