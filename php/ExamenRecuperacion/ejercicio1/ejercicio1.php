<?php 
function creacion_matriz($n,&$arr){
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $arr[$i][$j] = rand(10,30);
        }
    }
}

function transposicion(&$var1,&$var2){
    $aux = $var1;
    $var1 = $var2;
    $var2 = $aux;
}
            
function diagonal(&$arr){
    $n = count($arr[0]);
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            if($i==$j){
                $aux = $arr[$i][$j];
                $arr[$i][$j] = $arr[$i][$n -  $j];
                $arr[$i][$n - $j] == $aux;
            }
            else
                $arr[$i][$j] = 0;
        }
    }
}
?>
<?php 
$n = $_GET['numero'];
$arr = [];
creacion_matriz($n,$arr);
for($i=0;$i<count($arr);$i++){
    echo implode(' ',$arr[$i]) ."<br/>";
}
echo count($arr[0]) ."<br/>";
diagonal($arr);
for($i=0;$i<count($arr);$i++){
    echo implode(' ',$arr[$i]) ."<br/>";
}

?>

