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

function matriz($a,$n){
    $alumnos = dni($a);
    $matriz = []; 
    for ($i=0;$i<count($alumnos);$i++){
        $matriz[$alumnos[$i]] = notas($n);
   }
   return $matriz;
}

function nif($x){
    $letra = array("T","R","W","A","G","M","F","P","D","X","B","N","J","Z",
    "S","Q","V","H","L","C","K","E");
    $x .= $letra[$x%23];
    return $x;
}


function media($lista_notas){
    $suma = 0;
    for ($i=0;$i<count($lista_notas);$i++){
        $suma += $lista_notas[$i]; 
    }
    $media =$suma/count($lista_notas) ;
    return $media;
}
?>
<?php
$a = $_GET['a'];
$n = $_GET['n'];

$notas = matriz($a,$n);

foreach($notas as $alumno => $puntuaciones){
    $persona = nif($alumno);
    $nota_media = media($puntuaciones);
    echo "<p> $persona => $nota_media </p>";
}
?>
