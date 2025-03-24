<?php
    // Variáveis locais

    $x = 15;
    echo "$x em escopo global <br>";

    function local() {
        $x = 5;
        echo "$x em escopo local <br>";
    }

    local();

    function local2(){
        $x = 20;
        echo "$x em escopo local 2 <br>";
    }

    $x = 45; // <- Alterando o escopo global

    local();
    local2();

    echo "$x foi alterado!";

?>