<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <form action="../php/ejercicio4.php" method="get">
       <label for="municipio">Municipios de España</label>
       <select name="municipio">
<?php
try{
    $conexion = new mysqli("10.30.0.10","root","root","bdPadron");
}catch(mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage();
    exit;
}

$sql = "select vaNomMunicipio, vaNomProvincia from taMunicipios,taProvincias where iRefProvincia = iCodProvincia order by vaNomProvincia, vaNomMunicipio ASC";
$resultado = $conexion->query($sql);
while($fila = $resultado->fetch_assoc()){
    echo "<option value='" . $fila['vaNomMunicipio'] . "'> ".$fila['vaNomMunicipio'] ." (".$fila['vaNomProvincia'].")</option>";
}
$resultado->close();
?>
        </select><br/>
        <label for="anios">Años</label>
        <select name="anios">
<?php 
$sql = "select distinct iAnio as anio from taPoblacion order by iAnio desc";
$resultado = $conexion->query($sql);
while($fila = $resultado->fetch_assoc()){
    echo "<option value='" .$fila['anio'] ."'>" .$fila['anio']."</option>";
}
$resultado->close();
$conexion->close();
?>
        </select><br/>
       <button type="submit">Enviar</button>
    </form>
</body>
</html>
