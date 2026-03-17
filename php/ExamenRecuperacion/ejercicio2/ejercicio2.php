<?php 
function creacion_matriz($n,&$arr){
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $arr[$i][$j] = rand(500,4000);
        }
    }
}
function silla($n,$arr){
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            if($arr[$i][$j] == max($arr[$i])){
                $max= [$arr[$i][$j], $i,$j];
                for($x=0;$x<$n;$x++){
                    if($max[0] == min($arr[$x][$j]))
                        return $max;
                        //echo implode(', ',$max);
                    }
            }
        }
    }
}
$matriz = [[1,2,8],[3,7,12],[4,9,11]];
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        if($matriz[$i][$j] == max($matriz[$i])){
            $max= [$matriz[$i][$j], $i,$j];
            for($x=0;$x<$n;$x++){
                $fila[] = $matriz[$x][$j];
                if($max[0] == min($fila))
                    echo implode(', ',$max);
            }
        }
    }
}
#function fila($arr){
#    $fila = [];
#    for($i=0;$i<count($arr);$i++){
#        ;
#    }
#    return $fila;
#}
#function columna($arr){
#    $columnaMin = [];
#    $columnaMax = [];
#    for($i=0;$i<count($arr);$i++){
#        $columnaMin[$i] = min($arr[$i]);
#        $columnaMax[$i] = max($arr[$i]);
#
#    }
#    return $columna;
#}
?>
<?php 
$n = $_GET['numero'];
$arr = [];
creacion_matriz($n,$arr);
for($i=0;$i<count($arr);$i++){
    echo implode(' ',$arr[$i]) ."<br/>";
}

?>
