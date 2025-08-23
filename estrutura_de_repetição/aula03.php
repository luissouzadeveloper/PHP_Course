<?php 
    // Loop aninhado
    $i = 0;

    while ($i <= 5) {
        echo "Loop externo $i <br>";

        $j = 1;
        while ($j <= 5) {
            echo "Loop interno $j <br>";

            $j++;
        }

        $i++;
    }
?>