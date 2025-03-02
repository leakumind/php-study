<?php

/**
 * Crie um arquivo PHP
 * Crie três variáveis com tipos de dados diferentes
 * Imprima estas variáveis
 */

$nome = "leak";
$idade = 21;
$saldo_Banco = 15000;
// Formatando número de casas decimais
$formattedNum = number_format($saldo_Banco, 2); // 15,000.00

echo "Eu sou o $nome eu tenho $idade anos e tenho no banco guardado $formattedNum mil";
