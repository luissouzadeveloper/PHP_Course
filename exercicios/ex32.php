<?php 
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $count = count($array);
    $index_aux = 0;

    while ($index_aux < $count) {
        if ($array[$index_aux] === 30 || $array[$index_aux] === 40) {
            $index_aux++;
            continue;
        }

        echo "Valor: $array[$index_aux] <br>";
        $index_aux++;
    }
?>