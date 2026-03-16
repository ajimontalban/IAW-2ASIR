<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <form action="../php/ejercicio4-nuevo.php" method="get">
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
$sql = "select distinct max(iAnio) as anio from taPoblacion";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
$resultado->close();
$anio = $fila['anio'];

for($i=0;$i<10;$i++){
    echo "<option value='" .$anio ."'>" .$anio."</option>";
    $anio--;
}
$conexion->close();
?>
        </select><br/>
        <label for="Hombres">
        <input type="checkbox" name="Hombres" value="iHombre" />Hombres<br/>
        <label for="Mujeres">
        <input type="checkbox" name="Mujeres" value="iMujeres" />Mujeres<br/>
        <label for="Total">
        <input type="checkbox" name="Total" value="iPoblacion" />Total<br/>
       <button type="submit">Enviar</button>
    </form>
</body>
</html>
