<?php
function gen_array($n){
    $s = array();
    for ($i = 0; $i < $n; $i++){
        $s[] = rand(0,100);
    }
    return $s;
}

function recuento($s,&$par,&$inpar){
    $par = 0;
    $inpar = 0;
    foreach ($s as $i => $valor){
        if ($valor % 2 == 0)
            $par++;
        else
            $inpar++;
    }
    

}

?>
<?php
$elementos = $_GET['n'];

$serie = gen_array($elementos);

echo implode(' ', $serie);

?>
