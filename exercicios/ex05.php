<?php
    $n1 = 1.76;
    $n2 = 3.67;
    $n3 = 9.99;

    echo $n1 . '<br>', $n2 . '<br>', $n3 . '<br>';

    if (is_float($n2)) {
        echo 'É um float';
    } else {
        echo 'Não é um float';
    }
?>