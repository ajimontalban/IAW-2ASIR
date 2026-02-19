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
$provincia = "Cadiz";

$sql = "call prMunicipiosProvincia(?)";
$procedimiento = $conexion->prepare($sql);
$procedimiento->bind_param("s", $provincia);
$procedimiento->execute();
$resultado = $procedimiento->get_result();
$procedimiento->close();

$fila = $resultado->fetch_assoc();
while($fila){
    echo $fila['vaNomMunicipio'] . '<br/>';
    $fila = $resultado->fetch_assoc();
}
$resultado->close();
$conexion->close();
?>
</body>
</html>

