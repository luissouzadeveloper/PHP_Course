<?php 
    function itensSupermercado() {
        $compras = ['Arroz', 'Feijão', 'Óleo', 'Macarrão'];

        return $compras;
    }

    $itens = itensSupermercado();
    echo implode(", ", $itens);
?>