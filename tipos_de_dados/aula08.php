<?php 
    $dado = true;

    if(is_bool($dado)){
        echo 'É um booleano 1 <br>';
    }

    if (is_bool(1)) {
        echo 'É um booleano 2 <br>';
    }

    if (0 == false) {
        echo '0 é considerado falso';
    }
?>