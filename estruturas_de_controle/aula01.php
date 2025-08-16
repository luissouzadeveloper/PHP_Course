<?php 
    // Estrutura if
    if (5 === 5) { // <- true
        echo "5 é igual a 5 <br>";
    }

    if (5 === '5') { // <- false
        echo "5 não é igual a '5'";
    }

    // if com variáveis
    $n1 = 5;
    $n2 = 3;

    if ($n1 > $n2) {
        echo "Sim, $n1 é maior que $n2";
    }
?>