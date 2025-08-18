<?php 
    $nome = 'João';
    $numero = 15;
    $verdade = true;

    if (is_int($nome)) {
        echo "É uma string <br>";
    } else {
        echo "Não é uma string <br>";
    }

    if (is_int($numero)) {
        echo "É um inteiro <br>";
    } else {
        echo "Não é um inteiro <br>";
    }

    if (is_int($verdade)) {
        echo "É um boolean <br>";
    } else {
        echo "Não é um boolean <br>";
    }
    
?>