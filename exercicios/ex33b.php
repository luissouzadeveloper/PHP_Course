<?php 
    $array = [];

    for ($i = 1; $i <= 10; $i++) { 
        array_push($array, $i);
    }

    echo "<pre>";
        print_r($array);
    echo "</pre>";
?>