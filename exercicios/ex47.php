<?php 
    $frase = 'este item está em promoção';

    $promocao = mb_substr($frase, -8);
    $maius = strtoupper($promocao);

    $frase = "este item está em $maius";

    echo ucfirst($frase);
?>