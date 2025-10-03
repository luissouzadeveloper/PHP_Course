<?php 
    // Função strpos

    $frase = 'Estou testando a função strpos, com ela posso buscar índices';

    $encontar = strpos($frase, "strpos");

    echo "$encontar <br>";

    $encontar2 = strpos($frase, "Go");

    echo "$encontar2 <br>";

    if ($encontar2 === false) {
        echo "Palavra não encontrada!";
    }
?>