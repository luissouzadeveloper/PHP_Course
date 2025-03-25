<?php 
    // Escopo global

    $varGlobal1 = 'Algo!';
    echo "$varGlobal1 global 1 <br>";

    if (true) {
        $varGlobal1 = 'Uma coisa';
        echo "$varGlobal1 dentro do if <br>";
    }

    echo "$varGlobal1 global 2 <br>";

    function funcao(){
        // Será gerado um erro na linha abaixo. Não consigo usar variáveis globais na função.
        // echo "$varGlobal1 local <br>";
    }
    funcao();

    function testeFunGlobal(){
        // Para acessar variáveis globais na função, precisa usar a palavra "global".
        global $varGlobal1;
        $varGlobal1 = 'altera';
        echo "$varGlobal1 acessada na função <br>";
    }

    testeFunGlobal();

    echo "$varGlobal1 global 3 <br>";
?>