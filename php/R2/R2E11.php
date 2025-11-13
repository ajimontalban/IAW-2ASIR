<?php
$num1=$_GET['ope1'];
$num2=$_GET['ope2'];
$num3=$_GET['ope3'];
$men=0;

if (($num1 < $num2) and ($num2 <= $num3)){
    $men=$num1;
    echo "<p> El número más  pequeño es $men</p>";
}
else if (($num1 < $num2) and ($num1 < $num3) and ($num3 <= $num2)){
    $men=$num1;
    echo "<p> El número más  pequeño es $men</p>";
}

else if (($num2 < $num1) and ($num2 < $num3) and ($num3 <= $num1)){
    $men=$num2;
    echo "<p> El número más  pequeño es $men</p>";
}
    
else if (($num2 < $num1) and ($num1 < $num3)){
    $men=$num2;
    echo "<p> El número más  pequeño es $men</p>";
}

else if (($num3 < $num2) and ($num2 < $num1)){
    $men=$num3;
    echo "<p> El número más  pequeño es $men</p>";
}

else if (($num3 < $num1) and ($num3 < $num2) and ($num1 <= $num2)){
    $men=$num3;
    echo "<p> El número más  pequeño es $men</p>";
}
else {
    echo "<p> Los numeros $num1, $num2 y $num3 son iguales</p>";
}
?>
