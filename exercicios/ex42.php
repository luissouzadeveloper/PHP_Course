<?php
    function countVowels($texto)
    {
        $vogais = ['a', 'e', 'i', 'o', 'u'];
        $contador = 0;

        for ($i = 0; $i < strlen($texto); $i++) {

            if (in_array(strtolower($texto[$i]), $vogais)) {
                $contador++;
            }
        }

        return $contador;
    }

    $frase = 'Eu vou ser programador';
    echo countVowels($frase);

