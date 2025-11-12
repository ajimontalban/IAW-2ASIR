<head>
<title>Relacion 1 ejercicio 1</title>
</head>

<body>
<h1>Ejercicio 1</h1>
<?php
    $num1=$_GET['ope1'];
    $num2=$_GET['ope2'];
    $suma=$num1 + $num2;
    $resta1=$num1 - $num2;
    $resta2=$num2 - $num1;
    $multi=$num1 * $num2;
    $divi1=$num1 / $num2;
    $divi2=$num2 / $num1;
    $modulo1=$num1 % $num2;
    $modulo2=$num2 % $num1;
    echo "<p>" . $num1 . " + " . $num2 . " = " . $suma . "</p>";
    echo "<p>" . $num1 . " - " . $num2 . " = " . $resta1 . "</p>";
    echo "<p>" . $num2 . " - " . $num1 . " = " . $resta2 . "</p>";
    echo "<p>" . $num1 . " * " . $num2 . " = " . $multi . "</p>";
    echo "<p>" . $num1 . " / " . $num2 . " = " . $divi1 . "</p>";
    echo "<p>" . $num2 . " / " . $num1 . " = " . $divi2 . "</p>";
    echo "<p>" . $num1 . " % " . $num2 . " = " . $modulo1 . "</p>";
    echo "<p>" . $num2 . " % " . $num1 . " = " . $modulo2 . "</p>";

?>
</body>
