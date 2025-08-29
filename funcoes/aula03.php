<?php 
    // Parâmetro de funções
    function maiorIdade($idade) {
        if ($idade < 18) {
            echo "Você é de menor! <br>";
        } else {
            echo "Você é de maior! <br>";
        }
    } 
    maiorIdade(22);
    maiorIdade(12);
    maiorIdade(18);

    function pessoa($nome, $idade) {
        echo "Seu nome é $nome e sua idade é de $idade anos <br>";
    }
    pessoa('Maria', 36);
    pessoa('Carlos', 32);
?>