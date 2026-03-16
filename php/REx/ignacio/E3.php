<?php
function lnep($n,$x){
    $var = 0;
    for ($i=1;$i <= $n ;$i++){
        if ( $i % 2 == 0){
            $var-=($x**2/$i);
        }else
            $var+=($x**2/$i);
    }
    return $var;
}
?>
<html>
<head> 
    <title> Ejercicio 3 </title>
</head>
<body>
<h1>Ejercicio tres</h1>
<?php
$x=$_GET['x'];
$n=$_GET['n'];

if ($n <= 0){
    echo "<p> Error: Debes introducir un número mayor a 0 para x </p>";
    exit(1);
}

$resultado = lnep($n,$x);
echo "<p>El resultado es: $resultado </p>";

?>
</body>
</html>

