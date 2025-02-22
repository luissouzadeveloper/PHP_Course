<?php 
    $carro = ['motor' => 1.8, 'marca' => 'Ford', 'nome' => 'Fiesta', 'portas' => 4];

    print_r($carro);
    $marca = $carro['marca'];
    $nome = $carro['nome'];
    echo '<br>';
    echo "O carro é da marca $marca com o nome de $nome";
?>