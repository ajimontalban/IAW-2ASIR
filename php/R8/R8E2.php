<?php
$IP="192.168.1.150";
$USER="root";
$PASS="root";
?>
<html lang="es">
<head>
    <title>Ejercicio 2 R8, conexiones con mysql</title>
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
$municipio = $_GET['m'];
$entero = $_GET['n'];
$ult_anio = 2024;

echo "<table border=\"1\">";
$anio = ($ult_anio - $entero)+1;
for ($i=0;$i<$entero;$i++){
    $tabla[0].="<th>iPoblacion$anio</th>";
    $sql = "SELECT iPoblacion FROM taPoblacion,taMunicipios WHERE iRefMunicipio=iCodMunicipio and iAnio = $anio and vaNomMunicipio like '$municipio'";
    $resultado = $conexion->query($sql);
    foreach($resultado as $fila){
        $tabla[1] .= "<td>" . $fila['iPoblacion'] . "</td>";
    }
    $anio++;
}

echo "<tr>". $tabla[0] . "</tr>";
echo "<tr>". $tabla[1] . "</tr>";
echo "</table>";
$resultado->close();
$conexion->close();
?>
</body>
</html>

