<?php
$n = $_GET['n'];

function fibonacci($numero){
    $fibonacci = [0,1];
    for($i=2;$i<=$numero;$i++){
        $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }
    echo "<p>" . $fibonacci[$numero] . "</p>";
}

fibonacci($n);
?>
