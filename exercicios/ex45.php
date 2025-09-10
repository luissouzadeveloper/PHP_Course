<?php 
    function sumDigits($valor) {
        $qntDigitos = strlen((string)$valor);

        return $qntDigitos;
    }

    echo sumDigits(2345678);
?>