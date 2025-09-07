<?php 
    // Retorno de múltiplos <dados></dados>
    function alteraDados($nome, $idade) {
        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados('Luis', 26);
    print_r($dados);

    echo "<br>";
    echo "Oi $dados[0], vc tem $dados[1]";
?>