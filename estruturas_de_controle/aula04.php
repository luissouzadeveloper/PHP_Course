<?php 
    // elseif

    $idade = 18;

    if ($idade < 13) {
        echo "Você é uma criança";
    } elseif ($idade >= 13 && $idade < 18){
        echo "Você é adolescente";
    } else {
        echo "Você é adulto";
    }
?>