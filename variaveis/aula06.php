<?php 
    // Escopo static
    function teste(){
        $n = 0;
        $n++;

        echo "$n <br>";
    }

    teste();
    teste();
    teste();

    function testeStatic(){
        static $n = 0;
        $n++;

        echo "$n <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
?>