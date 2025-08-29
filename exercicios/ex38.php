<?php 
    function quadrado($numero) {
        return pow($numero, 2);
    }

    $numQuadrado = quadrado(4);
    echo "$numQuadrado <br>";
    $numQuadrado = quadrado(12);
    echo "$numQuadrado <br>";
?>