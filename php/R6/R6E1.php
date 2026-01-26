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
    $letra = array("T","R","W","A","G","M","F","P","D","X","B","N","J","Z",
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

function media($lista_notas){
    $suma = 0;
    for ($i=0;$i<count($lista_notas);$i++){
        $suma += $lista_notas[$i]; 
    }
    $media =$suma/count($lista_notas) ;
    return $media;
}

function buscar_notas($array,$nota){
    $indices = [];
    for ($i=0;$i<count($array);$i++){
        if (in_array($nota, $array[$i]))
            $indices[] = $i;
    }
    return $indices;
}

// Intentar sacar desde la funcion el contenido
function mostrar_alumnos($array_indice,$array_alumnos){
    $vector = [];
    for ($i=0;$i<count($array_indice); $i++){
       $vector[] = nif($array_alumnos[$array_indice[$i]]);
    }
    return $vector;
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

echo "<p>La nota más alta es: $notamax0 </p>";
echo "<p>La nota más baja es: $notamin0 </p>";

$lis_comprobacion = [1,3,4];
$lista_alumnos_mayor = buscar_notas($notas,$notamin0);
$lista_alumnos_menor = buscar_notas($notas,$notamax0);
$al_menor = mostrar_alumnos($lista_alumnos_menor,$alumnos);
$al_mayor = mostrar_alumnos($lista_alumnos_mayor,$alumnos);
$prueba = mostrar_alumnos($lis_comprobacion,$alumnos);
echo "<p>Alumnos con la nota mas baja:<br/>" . implode('-',$al_menor) . " </p>";
echo "<p>Alumnos con la nota mas alta:<br>" . implode('-',$al_mayor) . " </p>";
echo "<p>Prueba de la funcion para sacar alumnos:<br>" . implode(' - ',$prueba) . " </p>";
?>
