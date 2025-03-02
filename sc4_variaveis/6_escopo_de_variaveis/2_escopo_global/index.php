<?php

// $imprimeValor = 10;
// echo "$imprimeValor GLOBAL MESMA VARIAVEL" . PHP_EOL;

// function testando()
// {
//     global $imprimeValor;
//     echo "$imprimeValor LOCAL MESMA VARIAVEL" . PHP_EOL;
// }

// testando();

$teste = "asd";
echo "$teste GLOBAL 1" . PHP_EOL;

if (5 > 2) {

    $teste = "dsa";

    $teste = "$teste if" . PHP_EOL;
}

echo "$teste GLOBAL 2";
