<?php 
    function soma($n1, $n2) {

        // retorna quais os argumentos da função
        print_r(func_get_args());

        echo '<br>';

        // retorna a quantidade de argumentos da função
        echo func_num_args();

        return $n1 + $n2;
    }

    soma(5, 3);
?>