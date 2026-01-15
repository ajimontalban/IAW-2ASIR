<?php
function dni($a){
    $alumnos = [];
    $arr_aux = [];
    do{
    $dni = rand(10000000,99999999);
    if (! isset($arr_aux[$dni]))
        $arr_aux[$dni] = 1;
        $alumnos[] = $dni;
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

//function matriz($a,$n){
//    $alumnos = dni($a);
//    $matriz = []; 
//    for ($i=0;$i<count($alumnos);$i++){
//        $matriz[$alumnos[$i]] = notas($n);
//   }
//   return $matriz;
//}

function nif($x){
    $letra = array("T","R","W","A","G","M","F","P","D","X","B","N","J","Z",
    "S","Q","V","H","L","C","K","E");
    $x .= $letra[$x%23];
    return $x;
}

function notamayor($i,$array){
    // $i es el indice del examen que queremos acceder
    $claves = array_keys($array);
    if (!($array[$claves[0]][$i]))
        exit("Ese examen no ha sido realizado!");

    foreach($array as $clave => $valor){
        reset($array[$clave]);
    }
    $nota = -1;
    foreach($array as $clave => $valor){
        if ($nota < $array[$clave][$i])
            $nota = $array[$clave][$i];
        else
            continue;
    }
    return $nota;
}

function notamenor($array,$y=0){
    // $y es el indice del examen que queremos acceder

    $claves = array_keys($array);
    for ($i=0;$i<count($claves);$i++){
        reset($array[$claves[$i]]);
    }
    if (!($array[$claves[0]][$y]))
        exit("Ese examen no ha sido realizado!");

    $nota = 11;
    foreach($array as $clave => $valor){
        if ($nota > $array[$clave][$y])
            $nota = $array[$clave][$y];
        else
            continue;
    }
    return $nota;
}
?>
<?php
$a = $_GET['a'];
$n = $_GET['n'];
$i = $_GET['i'];

$notas = matriz_num($a,$n);

$alumnos = dni($a);
for ($j=0;$j<count($notas);$j++){

}
foreach($notas as $alumno => $puntuaciones){
    $persona = nif($alumno);
    echo "<p> $persona => " . implode(', ', $puntuaciones) . "</p>";
}

$notamax0 = notamayor($i,$notas);
$notamin0 = notamenor($notas,$i);

echo "<p>La nota más alta es: $notamax0 </p>";
echo "<p>La nota más baja es: $notamin0 </p>";
?>
