<?php 
    function pessoa($nome, $altura) {
        $altura_format = number_format($altura, 2, ',','.');
        echo "O nome é $nome e mede $altura_format m <br>";
    }

    pessoa('Ana', 1.60);
    pessoa('Rafael', 1.92);
?>