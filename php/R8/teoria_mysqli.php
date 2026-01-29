<html>
<head>
    <title>Prueba de php con mysql</title>
</head>
<body>
<?php
try{
    $conexion = new mysqli("10.30.0.10",'root',"root");
    echo "Conexión establecida<br/>";
}
catch(mysqli_sql_exception $error){
    echo "Error de conexión: ".$error->getMessage()."<br/>";
    exit();
}
$conexion->select_db("bdPadron");
echo "Base de datos seleccionada<br/>";
$sql = "select * from taProvincias where vaNomProvincia like 'co%'";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
while ($fila) {
echo $fila['vaNomProvincia'] . '<br />';
$fila = $resultado->fetch_assoc();
}
$resultado->close();
$conexion->close();
echo "Conexión cerrada";
?>
</body>
</html>
