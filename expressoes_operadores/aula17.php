<?php 
    // Operador cast

    // string -> int
    $num1 = (int) "10";

    echo $num1;
    echo '<br>';
    echo $num1 + 6;
    echo '<br>';

    // string -> float
    $num2 = (float) "2.50";
    echo $num2;
    echo '<br>';
    echo $num2 + 0.1;
    echo '<br>';

    $txt = (string) 890;
    echo $txt;
?>