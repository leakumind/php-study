<?php

/**
 * Crie um arquivo PHP
 * Crie um Array Associativo com características de uma pessoa
 * Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja
 */

$pessoa = [
    'nome' => 'Bruna',
    'idade' => 1,
    'altura' => 1.62,
];

$idadePessoa = $pessoa['idade'];

if ($idadePessoa >= 18) {
    echo "Você é maior de idade";
} elseif ($idadePessoa < 18) {
    echo "Você é menor de idade";
} else {
    echo "checando";
}
