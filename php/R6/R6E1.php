<?php
function dni($a){
    $alumnos = [];
    $arr_aux = [];
    do{
    $dni = rand(10000000,99999999);
    if (isset($arr[$dni]))
        continue;
    else{
        $arr_aux[$dni] = 1;
        $alumnos[] = $dni;
    }
    }while(count($arr_aux)<$a);

    return $alumnos;
}

function notas($n){
    $l_notas = [];
    for ($i = 0; $i < $n; $i++){
        $l_notas[] = round((rand()/ getrandmax()*(10.00 - 0.00)+0.00),2);
    }
    return $l_notas;
}

function matriz($a,$n){
    $alumnos = dni($a);
    $matriz = []; 
    for ($i=0;$i<count($alumnos);$i++){
        $matriz[$alumnos[$i]] = notas($n);
    }
    return $matriz;
}

function nif($x){
    $letra = $x % 23;
    switch($letra){
        case 0:
            $nif = $x . "T";
            break;
        case 1:
            $nif = $x . "R";
            break;
        case 2:
            $nif = $x . "W";
            break;
        case 3:
            $nif = $x . "A";
            break;
        case 4:
            $nif = $x . "G";
            break;
        case 5:
            $nif = $x . "M";
            break;
        case 6:
            $nif = $x . "Y";
            break;
        case 7:
            $nif = $x . "F";
            break;
        case 8:
            $nif = $x . "P";
            break;
        case 9:
            $nif = $x . "D";
            break;
        case 10:
            $nif = $x . "X";
            break;
        case 11:
            $nif = $x . "B";
            break;
        case 12:
            $nif = $x . "N";
            break;
        case 13:
            $nif = $x . "J";
            break;
        case 14:
            $nif = $x . "Z";
            break;
        case 15:
            $nif = $x . "S";
            break;
        case 16:
            $nif = $x . "Q";
            break;
        case 17:
            $nif = $x . "V";
            break;
        case 18:
            $nif = $x . "H";
            break;
        case 19:
            $nif = $x . "L";
            break;
        case 20:
            $nif = $x . "C";
            break;
        case 21:
            $nif = $x . "K";
            break;
        case 22:
            $nif = $x . "E";
            break;
        default:
            exit("Algo ha salido mal calculando el nif ");
    }
    return $nif;
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

function notamenor($i=0,$array){
    // $i es el indice del examen que queremos acceder

    $claves = array_keys($array);
    if (!($array[$claves[0]][$i]))
        exit("Ese examen no ha sido realizado!");
    

    foreach($array as $clave => $valor){
        reset($array[$clave]);
    }
    $nota = 11;
    foreach($array as $clave => $valor){
        if ($nota > $array[$clave][$i])
            $nota = $array[$clave][$i];
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
$notas = matriz($a,$n);

foreach($notas as $alumno => $puntuaciones){
    $persona = nif($alumno);
    echo "<p> $persona => " . implode(', ', $puntuaciones) . "</p>";
}

$notamax0 = notamayor($i,$notas);
$notamin0 = notamenor($i,$notas);

echo "<p>La nota más alta es: $notamax0 </p>";
echo "<p>La nota más baja es: $notamin0 </p>";
?>
