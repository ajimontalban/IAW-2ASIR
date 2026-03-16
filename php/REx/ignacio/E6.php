<?php
function arr_aleatorios($n){
    $arr_num = [];
    for ($i=0;$i < $n; $i++){
        $arr_num[] = rand(1,100);
    }
    return $arr_num;
}

function media($n){
    $suma = 0;
    for ($i=0;$i < count($n); $i++) {
        $suma+=$n[$i];
    }
    $media = $suma / count($n);
    return $media;
}

function mayor_menor($m,&$nmay,&$nmen){
    $may = [];
    $men = [];
    $media = media($m);
    for ($i=0;$i<count($m);$i++){
        if ($m[$i]> $media){
            $may[] = $m[$i];
        }else
            $men[] = $m[$i];
    }
    
    $nmay = count($may);
    $nmen = count($men);
}
?>
<html>
<head> 
    <title> Ejercicio 3 </title>
</head>
<body>
<h1>Ejercicio seis</h1>
<?php
$n=$_GET['n'];

if ($n <= 0){
    echo "Error: Debes introducir un valor mayor a 0";
    exit(1);
}


$arr = arr_aleatorios($n);
$media = media($arr);
mayor_menor($arr,$nmay,$nmen);
echo "<p>El array es es: " . implode(' ',$arr) . "</p>";
echo "<p>La media es: $media</p>";
echo "<p>Hay $nmay números por encima de la media y $nmen por debajo</p>";
?>
</body>
</html>

