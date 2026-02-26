<?php
$IP="10.30.0.10";
$USER="root";
$PASS="root";
?>
<html lang="es">
<head>
    <title>Ejercicio 7 R9, conexiones con mysql</title>
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
$ultanio = 2024;
$comunidad = $_GET['comunidad'];
$html = "<tr><th colspan='2' >$comunidad</th></tr>";
for ($i=0;$i<5;$i++){
    $cad = "a";
    $cad .= $ultanio;
    if(isset($_GET[$cad])){
        $sql = "call prPoblacionComunidad(?,?,@poblacion)";
        $procedimiento = $conexion->prepare($sql);
        $procedimiento->bind_param("sd",$comunidad, $_GET[$cad]);
        $procedimiento->execute();
        $procedimiento->close();

        $sql = "select @poblacion poblacion";
        $resultado = $conexion->query($sql);
        $fila = $resultado->fetch_assoc();
        $html .= "<tr><td>".$_GET[$cad]. "</td><td>".$fila['poblacion'] . "</td></tr>";
        $resultado->close();
    }
    $ultanio--;
}
$html .= "</table>";
$conexion->close();
echo $html;
?>
</body>
</html>

