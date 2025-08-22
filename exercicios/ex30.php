<?php 
    $array = ['João', 'Maria', 10, true, 80.93, 'Teste'];

    $count = count($array);
    $index = 0;

    while ($index < $count) {
        if (is_string($array[$index])) {
            echo "$array[$index] <br>";
        }
        $index++;
    }
?>