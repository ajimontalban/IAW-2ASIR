<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de salario</title>
    <style>.error{ color:red; }</style>
</head>
<body>
<form action="3_2_calculo_salari.php">
    <label for="nombre">Nombre </label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" name="apellidos"><br>
    <label for="edad">Edad</label>
    <input type="number" id="edad" name="edad"><br>
    <label for="salario">Salario</label>
    <input type="number" id="salario" name="salario"><br>
    <button>Enviar</button>
</form>
<?php
if(isset($_GET['nombre']) && isset($_GET['apellidos']) &&
    isset($_GET['edad']) && isset($_GET['salario'])){
    $nombre=$_GET['nombre'];
    $apellidos=$_GET['apellidos'];
    $edad=$_GET['edad'];
    $salario=$_GET['salario'];

    if($salario < 1000){
        if($edad < 30)
            $salario = 1100;
        elseif ($edad >= 30 and $edad <= 45)
            $salario*=1.03;
        else
            $salario*=1.15;
    }elseif ($salario <= 2000){
        if ($edad > 45)
            $salario*=1.03;
        else
            $salario*=1.1;
    }
    echo "$nombre $apellido, tu salario será de $salario €";
}else {
    echo "<p class='error'>Faltan datos</p>";
}
?>
</body>
</html>
