<?php
$IP = "10.30.0.10";
$USER = "root";
$PASS = "root";
$BBDD = "bdPadron";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <form method="get" action="../R8/R8E3.php">
        <label for="comunidad">Comunidad</label>
        <select>
<?php 
try{
    $conexion = new mysqli($IP,$USER,$PASS,$BBDD);
}catch(mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage() . "</br>";
    exit(); 
}
$sql = "call prComunidades()";
$procedimiento = $conexion->prepare($sql);
#$procedimiento->bind_params("sd",$algo,$algo);
$procedimiento->execute();
$resultado = $procedimiento->get_result();
$procedimiento->close();

while($fila = $resultado->fetch_assoc()){
    echo "<option name='" . $fila['vaNomComunidad'] . "'>" . $fila['vaNomComunidad'] . "</option>";
}
$resultado->close();
$conexion->close();
?>
        </select>
    </form> 
</body>
</html>
