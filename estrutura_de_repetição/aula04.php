<?php 
    // Continue em loop
    $cont = 10;

    while ($cont > 0) {
        
        if ($cont === 5 || $cont === 7) {
            echo "Pulou a execução";
            $cont--;
            continue;
        }

        if ($cont === 2) {
            echo "Terminando o loop com o break $cont <br>";
            break;
        }
        
        echo "Número $cont <br>";
        $cont--;
    }
?>