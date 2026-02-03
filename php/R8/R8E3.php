<?php
$IP="192.168.1.150";
$USER="root";
$PASS="root";
?>
<html lang="es">
<head>
    <title>Ejercicio 3 R8, conexiones con mysql</title>
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
$comunidad = $_GET['com'];

$sql = "SELECT vaNomProvincia, sum(iPoblacion) as Poblacion FROM taPoblacion,taMunicipios,taProvincias,taComunidades 
WHERE iRefMunicipio=iCodMunicipio and iRefProvincia=iCodProvincia and iRefComunidad=iCodComunidad and iAnio = 2024 and vaNomComunidad like '$comunidad'
GROUP BY vaNomProvincia
ORDER BY Poblacion DESC";
$resultado = $conexion->query($sql);

echo "<table border=\"1\">";
echo "<tr><th>vaNomProvincia</th><th>Poblacion</th></tr>";
    foreach($resultado as $fila){
        echo "<tr><td>" . $fila['vaNomProvincia'] . "</td><td>". $fila['Poblacion']. "</td></tr>";
    }
echo "</table>";
$resultado->close();
$conexion->close();
?>
</body>
</html>

