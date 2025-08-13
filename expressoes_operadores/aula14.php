<?php 
    // Operador lógico AND
    if (10 < 20 && 7 > 2) { // <- true
        echo "True"; 
    }

    if(10 < 7 && 20 > 5) { // <- false
        echo "false";
    }

    $n1 = 6;
    $n2 = 3;
    $n3 = 10;
    $n4 = 2;

    if ($n1 > $n2 && $n3 < $n4) {
        // false
        echo "false";
    }

    if ($n2 < $n1 && $n3 > $n4) {
        // true
        echo "Verdadeiro";
    }
?>