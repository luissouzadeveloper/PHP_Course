<?php 
    // Verificando se o dado é uma string
    $str = 'Texto';
    $num = 10;

    if (is_string($str)) {
        echo "$str é uma string 1<br>";
    }

    if (is_string($num)) {
        echo "$num é uma string 2<br>";
    }

    if (is_string('asd')) {
        echo "É uma string 3<br>";
    }
?>