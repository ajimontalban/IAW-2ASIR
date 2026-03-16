<?php
function numeros($n){
    $arr=[];
    for ($i=0;$i < $n; $i++){
        $arr[] = rand(100,500);
    }
    return $arr;
}

function mostrar($n){
    $serie = numeros($n);
   echo "<table border=\"1px\">";
   echo "<thead><tr><td>Numeros aleatorios</td></tr></thead>";
   echo "<tbody>";
    foreach ($serie as $k => $valor){
        echo "<br/>";
        echo "<tr><td>$valor</td></tr>";
    }
   echo "</tbody>";
   echo "</table>";
}
?>
<html>
<head> 
    <title> Ejercicio 4 </title>
</head>
<body>
<h1>Ejercicio cuatro</h1>
    <?php
    $n=$_GET['n'];

    if ($n <= 0){
        echo "<p> Error: Debes introducir un número mayor a 0";
        exit(1);
    }

    mostrar($n);

    ?>
</body>
</html>

