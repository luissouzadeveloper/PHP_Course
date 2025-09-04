<?php 
    function sumEvenNumbers($numero) {
        $soma = 0;
        for ($i = 1; $i < $numero; $i++) { 
            if ($i % 2 === 0) {
                $soma += $i + $numero;
            }
        }

        return $soma;

    }

    echo sumEvenNumbers(8);
?>