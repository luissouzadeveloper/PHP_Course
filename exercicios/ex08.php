<?php 
    $pessoa = ['nome' => 'José', 'idade' => 20, 'profissao' => 'Programador'];
    print_r($pessoa);

    echo '<br>';

    if ($pessoa['idade'] >= 18) {
        echo 'Sua idade é de ' . $pessoa['idade'] . ' anos. É de maior';
    } else {
        echo 'É de menor';
    }
?>