<?php
$coor_x=$_GET['ope1'];
$coor_y=$_GET['ope2'];

if ($coor_x == 0 && $coor_y == 0)
    echo "<p> El punto ($coor_x,$coor_y) se encuentra en el origen de coordenada</p>";
else if ($coor_x == 0  || $coor_y == 0)
    if ($coor_x == 0) 
        echo "<p> El punto ($coor_x,$coor_y) se encuentra en el eje X</p>";
    else 
        echo "<p> El punto ($coor_x,$coor_y) se encuentra en el eje Y</p>";
else if ($coor_x < 0 && $coor_y > 0)
    echo "<p> El punto ($coor_x,$coor_y) se encuentra en segundo cuadrante</p>";
else if ($coor_x > 0 && $coor_y > 0)
    echo "<p> El punto ($coor_x,$coor_y) se encuentra en primer cuadrante</p>";
else if ($coor_x < 0 && $coor_y < 0)
    echo "<p> El punto ($coor_x,$coor_y) se encuentra en tercer cuadrante</p>";
else 
    echo "<p> El punto ($coor_x,$coor_y) se encuentra en cuarto cuadrante</p>";


        
?>
