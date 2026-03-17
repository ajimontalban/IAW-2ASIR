<?php 
function vector_aleatorios($n){
    $arr = [];
    for($i = 0; $i < $n ; $i++){
        $arr[] = rand(0,1000);
    }
    return $arr;
}
function vector_normalizado($arr){
    $norm = [];
    for($i = 0; $i < count($arr); $i++){
        $nmax = max($arr);
        $norm[$i] = $arr[$i] / $nmax;
    }
    return $norm;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = '1'>
<?php 
$n = $_GET['n'];
$arr = vector_aleatorios($n);
$norm = vector_normalizado($arr);
$html = "<thead><tr><th colspan = '2' >Vectores </th></tr></thead><tbody>";
for($i=0;$i<$n;$i++){
    $html.= "<tr><td>" . $arr[$i] ."</td><td>". $norm[$i] . "</td></tr>";
}
$html .= "</tbody>";
echo $html;

?>
    </table>    
</body>
</html>
