<?php 
    // Escopos de funções
    $var = 10;
    $var2 = 20;

    function testeEscopo() {
        $var = 5;

        static $var3 = 30;
        $var3++;

        echo "ESCOPO LOCAL: $var <br>";

        // Usando var global aqui
        global $var2;
        echo "ESCOPO GLOBAL NA FUNÇÃO: $var2 <br>";

        // Usando var static
        echo "VAR STATIC NA FUNÇÃO: $var3 <br>";
    }

    testeEscopo();
    echo "ESCOPO GLOBAL: $var <br>";

    testeEscopo();
    testeEscopo();
?>