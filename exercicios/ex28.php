<?php 
    $num1 = 10;
    $num2 = 7;
    $msg = 'Mensagem';

    if (is_int($num1) || is_float($num1)) {
        echo "$num1 é um número <br>";

        $multiplicacao = $num1 * 50;

        if ($multiplicacao > 100) {
            echo "O número é maior que 100";
        }
    } else {
        echo "Não é um número";
    }
?>