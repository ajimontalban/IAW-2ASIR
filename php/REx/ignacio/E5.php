<?php

function primo($n){
    $div = [];
    for ($i=1; $i<=$n;$i++){
        if ($n%$i == 0)
            $div[] = $i;
    }
    return (count($div) == 2);
}

function intervalo($x,$y){
    $arr = [];
    for ($i=$x;$i < $y ; $i++){
        $num = rand($x,$y);
        while(isset($arr[$num])){
            if (primo($num))
                return $num;
            else
                $num = rand($x,$y);
        }
            $arr[$num]=1;
    }
}
?>
<html>
<head> 
    <title> Ejercicio 5 </title>
</head>
<body>
<h1>Ejercicio cinco</h1>
<?php
$x=$_GET['x'];
$y=$_GET['y'];

if ($x<=0 || $y<=0){
    echo "Error: Los números introducidos deben ser mayores a 0";
    exit(1);
}

$primo = primo($x);
echo "$primo";
?>
</body>
</html>

