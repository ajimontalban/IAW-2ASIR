<?php


for ($x=0;$x<3;$x++){

    $str="";
    $aleatorio=rand(20,40);
    $i=0;
    while ($i < $aleatorio){
        $str=$str . '*';
        $i++;
    }
    echo "<p> $str </p>";
}
?>
