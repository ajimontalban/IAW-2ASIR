<?php
$IP="10.30.0.10";
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
$municipio = $_POST['municipio'];
$entero = $_POST['entero'];

$sql = "call prUltAnio(@ultanio)";
$procedimiento = $conexion->prepare($sql);
$procedimiento->execute();
$procedimiento->close();

$sql = "select @ultanio as anio";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
$ianio = $fila['anio'];
$resultado->close();

$sql = "call priPoblacionMunicipio(?,?)";
$procedimiento = $conexion->prepare($sql);
$procedimiento->bind_param("si",$municipio, $entero);
$procedimiento->execute();
$resultado = $procedimiento->get_result();
if ($resultado->num_rows) {
    $html  = "<h2>Poblacion de " . strtoupper($municipio) . " de los últimos " . $entero . " años</h2>";
    $html .= "<table border=\"1\">";
    $html .= "<tr><th>Año</th><th>Municipio</th></tr>";
    $poblacion = $resultado->fetch_assoc();
    while($poblacion){
        $html .= "<tr><td>$ianio</td>";
        $html .= "<td>" . $poblacion['iPoblacion'] . "</td></tr>";
        $ianio--;
        $poblacion = $resultado->fetch_assoc();
    }
    $html .= "</table>";
    echo $html;
}else
    echo "<h3>Municipio incorrecto: " . $municipio . "</h3>";
$resultado->close();
$conexion->close();
?>
</body>
</html>

