<?php
$num1=rand(10,30);
$num2=rand(10,30);

if ($num1 > $num2){
    $aux=$num2;
    $num2=$num1;
    $num1=$aux;
}
    
for ($i=$num1; $i<=$num2;$i++){ 
    echo "<p> $i </p>";
}
?>
