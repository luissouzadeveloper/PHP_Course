<?php 
    // Comprimento de strings
    $str1 = 'Uma string grande';
    $str2 = 'Outra string';

    echo strlen($str1) . '<br>';
    echo strlen($str2) . '<br>';

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if ($len1 > $len2) {
        echo "A string 1 é a maior que a string 2";
    } else {
        echo "A string 2 é a maior que a string 1";
    }
?>