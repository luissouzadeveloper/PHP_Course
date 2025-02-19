<?php 
    echo '"String com aspas duplas" <br>';
    echo "'String com aspas simples' <br>";

    // Nas aspas duplas é possível a interpretação da variável
    // Nas aspas simples não é possível a interpretação
    // EX:
    $idade = 20;
    echo "Eu tenho $idade anos. <br>";
    echo 'Eu tenho $idade anos.';
?>