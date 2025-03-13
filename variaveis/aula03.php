<?php 
    $valor1 = 10;
    $valor2 =& $valor1;

    echo $valor1;
    echo "<br>";
    echo $valor2;
    echo "<br>";

    $valor2 = 20;

    echo $valor1;
    echo "<br>";
    echo $valor2;
    echo "<br>"
?>