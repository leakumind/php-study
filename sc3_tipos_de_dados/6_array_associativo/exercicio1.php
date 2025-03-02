<?php

/**
 * Crie um arquivo PHP
 * Crie um Array com característica de um carro
 * Imprima duas características
 */

$carro = [
    'marca' => 'Volkswagen',
    'modelo' => 'Tiguan',
    'ano' => 2025,
    'cor' => 'Azul'
];

$marcaCarro = $carro['marca'];
$modeloCarro = $carro['modelo'];
$anoCarro = $carro['ano'];

echo "O $modeloCarro da marca $marcaCarro e do ano de $anoCarro, é excelente e confortável";
