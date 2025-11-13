<?php 
$num1=$_GET['ope1'];
$num2=$_GET['ope2'];
$cod=$_GET['ope3'];
$ope;

switch ($cod) {
    case 1:
        $ope=$num1 + $num2;
        echo "<p> El resultado de la suma es: $ope </p>";
        break;
    case 2:
        $ope=$num1 - $num2;
        echo "<p> El resultado de la resta es: $ope </p>";
        break;
    case 3:
        $ope=$num1 * $num2;
        echo "<p> El resultado de la multiplicación es: $ope </p>";
        break;
    case 4:
        if ($num2 == 0) {
            echo "<p> No se puede dividir entre 0!";
            break;
        }else {
            $ope=$num1 / $num2;
            echo "<p> El resultado de la division  es: $ope </p>";
        }
        break;
    case 5:
        if ($num2 == 0) {
            echo "<p> No se puede dividir entre 0!";
            break;
        }else {
            $ope=$num1 % $num2;
            echo "<p> El módulo de la division  es: $ope </p>";
        }
        break;
    default:
        echo "<p> Introduce un número del 1 al 5! </p>"; 

}
?>
