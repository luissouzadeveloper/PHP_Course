<?php 
    // if aninhado

    if (10 > 5) {
        echo "Entrou no if 1 <br>";

        if ("nome" === "nome") {
            echo "Entrou no if 2 <br>";
        }
    }

    if (10 >= 7) {
        echo "Entrou no if 3 <br>";

        if ("nome" !== "nome") {
            echo "Entrou no if 4 <br>";
        } else {
            echo "São iguais";
        }
    }
?>