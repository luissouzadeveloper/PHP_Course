<?php 
    // Objetos
    class Pessoa{
        function falar(){
            echo 'Olá pessoal';
        }
    }

    $luis = new Pessoa();
    $luis->falar();

?>