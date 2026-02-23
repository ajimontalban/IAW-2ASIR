<?php
$IP="10.30.0.10";
$USER="root";
$PASS="root";
$BDD="bdPadron";
#$FORM="R8E6.php";
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
    <form method="post" action="R8E6.php">
        <label for="n">Provincia</label>
        <select name="provincia">
<?php
try{
$conexion = new mysqli($IP,$USER,$PASS,$BDD);
}
catch (mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage()."<br/>";
}
$sql = "SELECT vaNomProvincia FROM taProvincias";

$resultado = $conexion->query($sql);

$fila = $resultado->fetch_assoc();
while ($fila){
    echo "<option value=\"" . $fila['vaNomProvincia'] ."\">". $fila['vaNomProvincia'] . "</option>";
    $fila = $resultado->fetch_assoc();
}

$resultado->close();
$conexion->close();
?>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
