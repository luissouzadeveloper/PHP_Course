<?php 
    $velocidade = 60;

    if ($velocidade < 40) {
        echo "$velocidade km/h. Velocidade ideal!";
    } elseif ($velocidade === 40) {
        echo "$velocidade km/h. Tome cuidado!";
    } else {
        echo "$velocidade km/h. Você foi multado!";
    }
?>