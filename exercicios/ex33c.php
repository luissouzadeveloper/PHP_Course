<?php 
    $array = [];

    for ($i = 10; $i <= 20; $i++) { 
        array_push($array, $i);
    }

    echo "<pre>";
        print_r($array);
    echo "</pre>";

    for ($j = 0; $j < count($array); $j++) { 
        if ($array[$j] % 2 === 1) {
            echo "Ímpares: $array[$j] <br>";
        }
    }
?>