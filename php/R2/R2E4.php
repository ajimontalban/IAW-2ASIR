<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$num=$_GET['ope1'];

if ($num<5 or $num >30)
    echo "<p> El número $num está fuera del rango </p>";
else if ($num >= 5 and $num <=10 )
    echo "<p> El número $num está comprendido entre 5 y 10</p>";
else if ($num >= 20 and $num <=30)
    echo "<p> El número está comprendido entre 20 y 30 </p>";
else
    echo "<p> El número $num no está comprendido ni entre 5 y 10 ni entre 20 y 30 </p>";
    
?>
