<?php 
    // Estrutura while
    $contador = 1;

    // Inicio da estrutura
    while ($contador <= 10) {
        // Corpo do while
        echo "$contador <br>";
        // Incremento
        $contador++;
    }

    echo "<br>";

    $contador2 = 10;

    while ($contador2 > 0) {
        if ($contador2 % 2 !== 0) {
            echo "$contador2 <br>";
        }
        $contador2--;
    }
?>