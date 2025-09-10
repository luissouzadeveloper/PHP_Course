<?php 
    function isPrime($num) {
        if ($num <= 1) {
            return "Não é um número primo!";
        }

        for ($i = 2; $i < sqrt($num); $i++) { 
            if ($num % $i === 0) {
                return "Não é um número primo!";
            }
        }

        return "É um número primo";
    }

    $saida = isPrime(5);

    echo $saida;
?>