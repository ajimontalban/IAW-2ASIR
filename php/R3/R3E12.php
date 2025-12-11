<?php
function comprobacion_binarios($a){

    $cociente=$a;
    while ($cociente >= 1){
        $resto = $cociente % 10;
        $cociente = intdiv($cociente,10);
        if ($resto != 0 &&  $resto != 1)
            return false;
    }
    return true;
}
?>
<html>

<body>
<h1>¿Es Binario?</h1>
<?php
$n=$_GET['n'];


if (comprobacion_binarios($n))
    echo "Es binario";
else 
    echo "No es binario";

?>
</body>

</html>
