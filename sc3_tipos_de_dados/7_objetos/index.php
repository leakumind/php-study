<?php

class Pessoa
{

    function falar()
    {
        echo "Estou falando!";
    }
}

$leak = new Pessoa();

// $leak->nome = "u mind";

// echo $leak->nome;

echo "<br>";

$leak->falar();
