<?php 
    // Decompondo URLs
    $url = "https://www.google.com";
    $arrUrl = parse_url($url);
    print_r($arrUrl);
    echo '<br>';

    $url2 = "http://www.horadecodar.com.br/?busca=php";
    $arrUrl2 = parse_url($url2);
    print_r($arrUrl2);
?>