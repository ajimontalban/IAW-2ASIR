<?php
$temp=$_GET['ope1'];

if ($temp >= 100)
    echo "<p> el agua está en estado gaseoso </p>";
else if ($temp >= 0)
    echo "<p> el agua está en estado líquido </p>";
else
    echo "<p> el agua está en estado sólido </p>";
?>
