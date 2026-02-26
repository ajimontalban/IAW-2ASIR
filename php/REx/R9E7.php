<?php
$IP="10.30.0.10";
$USER="root";
$PASS="root";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="J Ignacio" />
	<title></title>
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <form method="get" action="R9E7M.php">
        <label for="comunidad">Comunidades</label>
        <select name="comunidad">
<?php
try{
$conexion = new mysqli($IP,$USER,$PASS);
}
catch (mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage()."<br/>";
}
// Indicamos la bd a usar, se puede indicar tambien al hacer la primera conexion.
$conexion->select_db("bdPadron");
$sql = "call prComunidades()";
$procedimiento = $conexion->prepare($sql);
$procedimiento->execute();
$resultado = $procedimiento->get_result();
$procedimiento->close();

while($fila = $resultado->fetch_assoc()){
    echo "<option value=\"". $fila['vaNomComunidad'] . "\">" .$fila['vaNomComunidad'] . "</option>";
}
$resultado->close();
?>
        </select></br></br>
<?php

$sql = "call pr5UltAnio()";
$procedimiento = $conexion->prepare($sql);
$procedimiento->execute();
$resultado = $procedimiento->get_result();
$procedimiento->close();

while($fila = $resultado->fetch_assoc()){
    echo "<label for=\"a".$fila['iAnio']. "\">";
    echo "<input type='checkbox' name='a". $fila['iAnio'] . "' value='". $fila['iAnio']."'/>" . $fila['iAnio']."</br>";
}
$resultado->close();
$conexion->close();
?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
