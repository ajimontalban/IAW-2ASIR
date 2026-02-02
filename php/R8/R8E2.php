<?php
function generacion_sql($n){
    $ult_anio = 2024;

    
    return $sql;
}
?>
<html lang="es">
<head>
    <title>Ejercicio 2 R8, conexiones con mysql</title>
</head>
<body>
<?php
try{
    $conexion = new mysqli("10.30.0.10","root","root");
}
catch(mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage(). "<br/>";
    exit();
}
$conexion->select_db("bdPadron");
$municipio = $_GET['m'];
$entero = $_GET['n'];



$sql = "";
$resultado = $conexion->query($sql);
echo "<table border=\"1\">";
echo "<tr><th>vaNomMunicipio</th></tr>";

foreach($resultado as $fila){
    echo "<tr><td>" . $fila['vaNomMunicipio'] . "</td></tr>";
}
echo "</table>";
#$fila = $resultado->fetch_assoc();
#while($fila){
#    echo $fila['vaNomMunicipio'] . "<br/>";
#    $fila = $resultado->fetch_assoc();
#}
$resultado->close();
$conexion->close();
?>
</body>
</html>

