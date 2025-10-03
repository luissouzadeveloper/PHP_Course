<?php 
    // Array para string
    $frutas = ['Maçã', 'Banana', 'Uva', 'Morango'];
    $string = implode(", ", $frutas);
    echo "$string <br>";

    $veiculo = ['Carro', 'Moto', 'Caminhão', 'Bicicleta'];
    $string2 = implode(" # ", $veiculo);
    echo "$string2 <br>";
?>