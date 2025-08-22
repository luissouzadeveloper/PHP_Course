<?php 
    // Comando break

    $cont = 0;

    while ($cont < 10) {
        echo "$cont <br>";
        if ($cont === 4) {
            echo "Loop encerrado! <br>";
            break; // <- o break quebra a execução
        }
        $cont++;
    }

    echo "Saiu do laço"
?>