<?php 
    // Resgatando parte da string -> substr()
    $str = 'Uma string qualquer';

    $strModificada = substr($str, 4, 6); // $str, indice inicial, comp. da palavra.

    echo $str . '<br>';
    echo $strModificada . '<br>';

    $str2 = 'Eu uso linux';
    $novaStr2 = substr($str2, 7, 5);

    echo $novaStr2 . '<br>';

    $novaStr3 = substr($str2, 0, -5);
    echo $novaStr3 . '<br>';

?>