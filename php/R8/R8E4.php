<?php
$IP="10.30.0.10";
$USER="root";
$PASS="root";
?>
<html lang="es">
<head>
    <title>Ejercicio 1 R8, conexiones con mysql</title>
</head>
<body>
<?php
try{
    $conexion = new mysqli($IP,$USER,$PASS);
}
catch(mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage(). "<br/>";
    exit();
}

$conexion->select_db("bdPadron");
$radio = 1.0;
$sql = "call prDatosCirculo(?, @perimetro, @circulo, @esfera)";
$procedimiento = $conexion->prepare($sql);
// el primer parametro indica tipo de los datos de entrada, si existen
// mas de un parametro se indica seguido "ssd" por ejemplo
$procedimiento->bind_param("d", $radio);
$procedimiento->execute();
$procedimiento->close();

$sql = "select @perimetro as perimetro, @circulo as circulo, @esfera as esfera";

$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
echo $fila['perimetro'] . '<br/>';
echo $fila['circulo'] . '<br/>';
echo $fila['esfera'] . '<br/>';
$resultado->close();
while($conexion->more_results())
    $conexion->next_result();

$radio = 2.3;
$sql = "call prDatosCirculo(?, @perimetro, @circulo, @esfera)";
$procedimiento = $conexion->prepare($sql);
// el primer parametro indica tipo de los datos de entrada, si existen
// mas de un parametro se indica seguido "ssd" por ejemplo
$procedimiento->bind_param("d", $radio);
$procedimiento->execute();
$procedimiento->close();

$sql = "select @perimetro as perimetro, @circulo as circulo, @esfera as esfera";

$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
echo $fila['perimetro'] . '<br/>';
echo $fila['circulo'] . '<br/>';
echo $fila['esfera'] . '<br/>';

$resultado->close();
$conexion->close();
?>
</body>
</html>

