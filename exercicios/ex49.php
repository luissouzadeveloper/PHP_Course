<?php 
    $str = 'carro - navio - helicóptero - barco - jangada';
    $strArray = explode("-", $str);

    // echo "<pre>";
    //     print_r($strArray);
    // echo "</pre>";

    for($i = 0; $i < count($strArray); $i++) {
        echo "Item $i: $strArray[$i] <br>";
    }
?>