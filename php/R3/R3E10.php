<?php 
$num1=$_GET['num1'];

if ( ! preg_match('/^[1-9][0-9]*$/', $num1)){
    echo "<p> Debes introducir un número entero mayor a 0";
    exit(1);
}

$i=1;
$divsores = [];
while ($i <= $num1){
    if (($num1 % $i) == 0){
        $divisores[] = $i;
    }
    $i++;
}

echo "<p> Los divisores de $num1 son: " . implode(',', $divisores) . "</p>";
?>
