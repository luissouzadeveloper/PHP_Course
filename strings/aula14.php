<?php 
    // string para array
    $frase = 'Teste na função explode';
    $fraseArray = explode(",", $frase);

    echo "<pre>";
        print_r($fraseArray);
    echo "</pre>";

    $frase2 = 'Carro, Avião, Barco, Navio';
    $frase2Array = explode(",", $frase2);
    echo "<pre>";
        print_r($frase2Array);
    echo "</pre>";
?>