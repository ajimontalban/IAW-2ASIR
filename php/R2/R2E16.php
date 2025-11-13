<?php 
$nota1=$_GET['ope1'];
$nota2=$_GET['ope2'];
$nota3=$_GET['ope3'];
$nota_final= ($nota1*0.2+$nota2*0.3+$nota3*0.5);
if (($nota1 < 0) or ($nota1 >10) or ($nota2 < 0) or ($nota2 >10)or($nota3 < 0) or ($nota3 >10)) {
    echo "<p> Las notas deben ser introducidas del 1 al 10 </p>";
} else {

    if ($nota_final < 5)
        echo "<p> La nota final es: $nota_final. Suspenso!</p>";
    else if ($nota_final >= 5 &&  $nota_final < 7)
        echo "<p> La nota final es: $nota_final. Aprobado!</p>";
    else if ($nota_final >= 7 &&  $nota_final < 9)
        echo "<p> La nota final es: $nota_final. Notable!</p>";
    else 
        echo "<p> La nota final es: $nota_final. Sobresaliente!</p>";
} 
?>
