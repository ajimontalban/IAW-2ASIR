<?php
$IP="10.30.0.10";
$USER="root";
$PASS="root";
?>
<html lang="es">
<head>
    <title>Ejercicio 4</title>
</head>
<body>
    <table border="1">
<?php
try{
    $conexion = new mysqli($IP,$USER,$PASS);
}
catch(mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage(). "<br/>";
    exit();
}
$conexion->select_db("bdPadron");
$anio = $_GET['anios'];

$municipio = $_GET['municipio'];

$html = "<tr><th colspan='2' > Poblacion de $municipio </th></tr>";
$sql = "call prPoblacion(?,?,@poblacionHombres, @PoblacionMujeres, @PoblacionTotal)";
if(isset($_GET['Hombres'])){
    $procedimiento = $conexion->prepare($sql);
    $procedimiento->bind_param("si",$municipio, $anio);
    $procedimiento->execute();
    $procedimiento->close();
    
    $sql = "select @poblacion poblacion";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_assoc();
    $html .= "<tr><td>".$fila['poblacion'] . "</td></tr>";
    $resultado->close();
    }
$html .= "</table>";
$conexion->close();
echo $html;
?>
</body>
</html>

