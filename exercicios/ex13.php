<?php 
    $expression = "5" * 12;
    echo $expression . '<br>';

    $tipoDado = gettype($expression); // <- retorna um integer
    echo $tipoDado . '<br>';

    echo gettype([]);
?>