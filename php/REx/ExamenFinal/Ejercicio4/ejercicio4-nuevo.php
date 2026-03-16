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

$html = "<tr><th colspan='2' > Poblacion de $municipio en el año $anio</th></tr>";
$sql = "call prPoblacion(?,?,@poblacionHombres, @PoblacionMujeres, @PoblacionTotal)";
$procedimiento = $conexion->prepare($sql);
$procedimiento->bind_param("si",$municipio, $anio);
$procedimiento->execute();
$procedimiento->close();
    
if(isset($_GET['Hombres'])){
    $sql = "select @poblacionHombres pobHombres";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_assoc();
    $html .= "<tr><td>".$fila['pobHombres'] . "</td></tr>";
    $resultado->close();
}
if(isset($_GET['Mujeres'])){
    $sql = "select @poblacionMujeres pobMujeres";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_assoc();
    $html .= "<tr><td>".$fila['pobMujeres'] . "</td></tr>";
    $resultado->close();
    }
if(isset($_GET['Total'])){
    $sql = "select @poblacionTotal pobTotal";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_assoc();
    $html .= "<tr><td>".$fila['pobTotal'] . "</td></tr>";
    $resultado->close();
    }
$html .= "</table>";
$conexion->close();
echo $html;
?>
</body>
</html>

