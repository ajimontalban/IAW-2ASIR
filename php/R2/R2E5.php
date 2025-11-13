<?php
$num=$_GET['ope1'];

if ($num % 15 == 0)
    echo "<p> El número $num es múltiplo de 3 y de 5 </p>";
else
    echo "<p> El número $num no es múltiplo de 3 y de 5</p>";
?>
