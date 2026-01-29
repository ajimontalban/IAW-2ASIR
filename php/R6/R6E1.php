<?php
function dni($a){
    $alumnos = [];
    $arr_aux = [];
    do{
    $dni = rand(10000000,99999999);
    if (! isset($arr_aux[$dni])){
        $arr_aux[$dni] = 1;
        $alumnos[] = $dni;
    }
    }while(count($arr_aux)<$a);
    return $alumnos;
}

function notas($n){
    $l_notas = [];
    for ($i = 0; $i < $n; $i++){
        $nota = (rand()/ getrandmax()*(10.00 - 0.00)+0.00);
        // Multiplica por el numero de decimales, trunca el resto y vuelve
        // a tener los decimales anteriores
        $nota = floor($nota *100)/100;
        $l_notas[] = $nota;
    }
    return $l_notas;
}

function matriz_num($a,$n){
    $matriz = [];
    for ($i=0;$i < $a;$i++)
        $matriz[$i] = notas($n);
    return $matriz;
}

function nif($x){
    $letra = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z",
    "S","Q","V","H","L","C","K","E");
    $x .= $letra[$x%23];
    return $x;
}

function nota_mayor($array){
    // asigno valor fuera del rango de notas
    //$nota_may = -1;
    $nota_may = $array[0][0];
    for ($i=0;$i<count($array);$i++){
        for ($j=0;$j< count($array[$i]);$j++){
            if ($array[$i][$j] > $nota_may){
                $nota_may = $array[$i][$j];
            }else
                continue;
        } 
    }
    return $nota_may;
}

function nota_menor($array){
    // asigno valor fuera del rango de notas
    //$nota_men = 11;
    $nota_men = $array[0][0];
    for ($i=0;$i<count($array);$i++){
        for ($j=0;$j< count($array[$i]);$j++){
            if ($array[$i][$j] < $nota_men){
                $nota_men = $array[$i][$j];
            }else
                continue;
        } 
    }
    return $nota_men;
}

function media($lista_notas,$decimal=2){
    $suma = 0;
    for ($i=0;$i<count($lista_notas);$i++){
        $suma += $lista_notas[$i]; 
    }
    $media = $suma/count($lista_notas) ;
    $media = floor($media*10**$decimal)/10**$decimal;
    return $media;
}

function buscar_notas($array,$nota,$dimension=2){
    $indices = [];
    if ($dimension == 2){
        for ($i=0;$i<count($array);$i++){
            if (in_array($nota, $array[$i]))
                $indices[] = $i;
        }
    }elseif($dimension == 1){
        for ($i=0;$i<count($array);$i++){
            if ($nota == $array[$i])
                $indices[] = $i;
        }
    }else{
        exit( "Has introducido una dimensión mayor a 2.");
    }
    return $indices;
}

function buscar_medias($array,$nota,$accion){
    $indices = [];
    switch ($accion){
    case 'MAYOR':
        for ($i=0;$i<count($array);$i++){
            if ($nota < $array[$i])
                $indices[] = $i;
        }
        break;
    case 'MENOR':
        for ($i=0;$i<count($array);$i++){
            if ($nota > $array[$i])
                $indices[] = $i;
        }
        break;
    default:
        exit('La función buscar_medias() toma valores de MAYOR o MENOR como tercer parametro');
    }
    return $indices;
}

function mostrar_alumnos($array_indice,$array_alumnos){
    $cadena = "";
    for ($i=0;$i<count($array_indice); $i++){
       $nif = nif($array_alumnos[$array_indice[$i]]);
       $cadena .= " - $nif";
    }
    echo "<p>" . substr($cadena,3). "</p>";
}

function mostrar_media($array_alumnos,$notas){
    $max_media = media($notas[0]);
    $min_media = media($notas[0]);
    echo "<p>Nota media de la asignatura para cada alumno:</p>"; 
    for ($i=0;$i<count($array_alumnos);$i++){
        $media[$i] = media($notas[$i]);
        $alumno_nif = nif($array_alumnos[$i]);
        echo "<p>$alumno_nif - " . $media[$i] . "</p>";
        if ($media[$i] > $max_media){
            $max_media = $media[$i];
        }
        if ($media[$i] < $min_media){
            $min_media = $media[$i];
        }
    }

    $indice_max_media = buscar_notas($media,$max_media,1);
    $indice_min_media = buscar_notas($media,$min_media,1);
    $media_total = media($media);
    $encima_media = buscar_medias($media,$media_total,'MAYOR');
    $debajo_media = buscar_medias($media,$media_total,'MENOR');
    echo "<p>Nota media más alta de la asignatura: $max_media</p>"; 
    echo "<p>Alumnos con la nota media más alta:</p>"; 
    mostrar_alumnos($indice_max_media,$array_alumnos);
    echo "<p>Nota media más baja de la asignatura: $min_media</p>"; 
    echo "<p>Alumnos con la nota media más baja:</p>"; 
    mostrar_alumnos($indice_min_media,$array_alumnos);
    echo "<p>Nota media de la asignatura: $media_total </p>"; 
    echo "<p>Alumnos por encima de la nota media:</p>"; 
    mostrar_alumnos($encima_media,$array_alumnos);
    echo "<p>Alumnos por debajo de la nota media:</p>"; 
    mostrar_alumnos($debajo_media,$array_alumnos);
}

function clasificacion($notas){
    $calificaciones = ['suspensos'=>0,'aprobados'=>0,'notables'=>0,'sobresalientes'=>0];
    for ($i=0;$i<count($notas);$i++){
        for ($j=0;$j< count($notas[$i]);$j++){
            switch (true){
            case ($notas[$i][$j]>=0 && $notas[$i][$j] < 5):
                $calificaciones['suspensos']++;
                break;
            case ($notas[$i][$j]>=5 && $notas[$i][$j] < 7):
                $calificaciones['aprobados']++;
                break;
            case ($notas[$i][$j]>=7 && $notas[$i][$j] < 9):
                $calificaciones['notables']++;
                break;
            case ($notas[$i][$j]>=9 && $notas[$i][$j] <= 10):
                $calificaciones['sobresalientes']++;
                break;
            }
        }
    }
    foreach($calificaciones as $clave => $valor){
        echo "<p>Número de $clave: $valor </p>";
    }

}
?>
<?php
$a = $_GET['a'];
$n = $_GET['n'];

$notas = matriz_num($a,$n);
$alumnos = dni($a);
for ($j=0;$j<count($notas);$j++){
    $nif = nif($alumnos[$j]);
    echo "<p> $nif => " . implode(', ',$notas[$j]) . " </p>";     
}

$notamax0 = nota_mayor($notas);
$notamin0 = nota_menor($notas);
$lista_alumnos_mayor = buscar_notas($notas,$notamax0);
$lista_alumnos_menor = buscar_notas($notas,$notamin0);
echo "<p>La nota más alta es: $notamax0 </p>";
echo "<p>Alumnos con la nota mas alta:<br>" ;
mostrar_alumnos($lista_alumnos_mayor,$alumnos);
echo "<p>La nota más baja es: $notamin0 </p>";
echo "<p>Alumnos con la nota mas baja:<br/>";
mostrar_alumnos($lista_alumnos_menor,$alumnos);
mostrar_media($alumnos,$notas);
clasificacion($notas);
?>
