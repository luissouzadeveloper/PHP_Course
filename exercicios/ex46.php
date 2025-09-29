<?php 
    // Exercício
    $string = 'O rato roeu a roupa do rei de roma';

    $numDeAs = 0;

    for($i = 0; $i < strlen($string); $i++) {

        if ($string[$i] === 'a') {
            $numDeAs++;
        }

    }
    echo "O números de As é $numDeAs";
?>