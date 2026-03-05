<?php
$IP="10.30.0.10";
$USER="root";
$PASS="root";
$BDD="bdPadron";
$N_COLUMNAS = 3;
?>
<html lang="es">
<head>
    <title>Ejercicio 4 R8, conexiones con mysql</title>
</head>
<body>
<?php
try{
    $conexion = new mysqli($IP,$USER,$PASS,$BDD);
}
catch(mysqli_sql_exception $error){
    echo "Error de conexión: " . $error->getMessage(). "<br/>";
    exit();
}
$provincia = $_GET['provincia'];

$sql = "call prMunicipiosProvincia(?)";
$procedimiento = $conexion->prepare($sql);
$procedimiento->bind_param("s", $provincia);
$procedimiento->execute();
$resultado = $procedimiento->get_result();
$procedimiento->close();

$html = "<table border=\"1\"><tr><th colspan=\"$N_COLUMNAS\">Municipios de $provincia</th></tr><tr>";
$contador = 1;
while($fila = $resultado->fetch_assoc()){
    $html .= "<td>" . $fila['vaNomMunicipio'] . '</td>';
    if($contador++ % $N_COLUMNAS == 0)
        $html .= "</tr><tr>";
}
$resultado->close();
$html .= "</tr></table>";
echo $html;
$conexion->close();
?>
</body>
</html>

