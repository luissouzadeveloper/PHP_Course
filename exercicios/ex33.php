<?php 
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    for ($i = 0; $i < count($array); $i++) { 
        if ($array[$i] % 2 === 0) {
            echo "Valor: $array[$i] <br>";
            $i++;
        }
    }
?>