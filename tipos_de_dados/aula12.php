<?php 
    // Tipo de dado null
    echo null;

    $nome = null;

    if (is_null($nome)) {
        echo 'O valor é nulo!';
    }

    $nome = "João";

    if (is_null($nome)) {
        echo 'O valor é nulo!';
    }
?>