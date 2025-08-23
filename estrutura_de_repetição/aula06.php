<?php 
    // for
    /*
        for(contador; condição; incremento/decr.){
            código
        }
    */
    $contador = 0;
    $nome = 'Maria';

    for ($contador; $contador < 10; $contador++) {
        if ($contador === 4) {
            echo "$nome <br>";
        }

        if ($contador === 7) {
            break;
        }

        if ($contador === 5) {
            continue;
        }
        echo "Elemento: $contador <br>";
    }
?>