<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imagen aleatoria</title>
</head>
<body>
<?php
$n = rand(0,1);

if ($n){
    echo "<img src='imagenes/imagen2.png'>";

}else {
    echo "<img src='imagenes/imagen1.png'>";
}

?>
</body>
</html>
