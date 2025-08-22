<?php 
    $count = 4;

    while ($count <= 30) {
        echo "$count <br>";

        if ($count === 24) {
            echo "Loop terminado! <br>";
            break;
        }

        $count += 2;
    }
?>