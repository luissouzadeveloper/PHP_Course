<?php 
    $textHtml = '<h1>Título</h1><p>texto</p><footer>rodapé</footer>';

    echo $textHtml;

    $textoPuro = strip_tags($textHtml);

    echo $textoPuro;
?>