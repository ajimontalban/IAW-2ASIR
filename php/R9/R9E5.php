<?php
$IP="10.30.0.10";
$USER="root";
$PASS="root";
$BDD="bdPadron";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="J Ignacio" />
	<title>Formulario 5. Realizado para el ejercicio 8-2</title>
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <form method="post" action="R8E2-mod.php">
        <label for="municipio">Elige un Municipio</label></br>
        <select name="municipio" id="municipio" size="10" required>
<?php
try{
    $conexion = new mysqli($IP,$USER,$PASS,$BDD);
}catch(mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage() . "<br/>";
    exit();
}

$sql = "SELECT vaNomMunicipio FROM taMunicipios ORDER BY vaNomMunicipio ASC";
$resultado = $conexion->query($sql);
while($fila = $resultado->fetch_assoc()){
    echo "<option value=\"" . $fila['vaNomMunicipio'] . "\">" . $fila['vaNomMunicipio'] . "</opcion>";
}
$resultado->close();
$conexion->close();
?>
        </select><br/></br>
        <label for="entero">Selecciona un número del 1 al 5</label>
        <input type="number" name="entero" min=1 max=5></br></br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
