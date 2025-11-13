<?php 
$dia=$_GET['ope1'];

switch ($dia) {
    case 1:
        echo "<p> Es Lunes! </p>";
        break;
    case 2:
        echo "<p> Es Martes! </p>";
        break;
    case 3:
        echo "<p> Es Miércoles! </p>";
        break;
    case 4:
        echo "<p> Es Jueves! </p>";
        break;
    case 5:
        echo "<p> Es Viernes! </p>";
        break;
    case 6:
        echo "<p> Es Sábado! </p>";
        break;
    case 7:
        echo "<p> Es Domingo! </p>";
        break;
    default:
        echo "<p> Introduce un número del 1 al 7! </p>"; 

}
?>
