<?php 
    // Checando se um número é inteiro
    // Usa-se a função is_int();

    // Aqui o true representa o 1 e false 0!
    echo is_int(10) . '<br>';

    if (is_int(5)) {
        // true
        echo 'É um número inteiro! <br>';
    } else {
        // false
        echo 'Não é um número inteiro! <br>';
    }

    // Foi utilizado uma condicional para retornar se é inteiro ou não!
    // Agora com variáveis

    $n1 = 1.8;

    if (is_int($n1)) {
        echo 'É um número inteiro! <br>';
    } else {
        echo 'Não é um número inteiro! <br>';
    }
    
?>