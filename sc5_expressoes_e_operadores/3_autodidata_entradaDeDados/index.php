<?php

/**
 * AUTODIDATA UM PROGRAMA DE COMMAND LINE
 */

echo "Iniciando a aplicação PHP (Command Line)" . PHP_EOL;

echo "Digite o valor para n1 = ";
$n1 = trim(fgets(STDIN)); // Usando trim para remover espaços em branco e quebras de linha

echo "Digite o valor para n2 = ";
$n2 = trim(fgets(STDIN)); // Usando trim para remover espaços em branco e quebras de linha

echo "Digite o valor para n3 = ";
$n3 = trim(fgets(STDIN)); // Usando trim para remover espaços em branco e quebras de linha


echo "Resultado n1 = {$n1}" . PHP_EOL;
echo "Resultado n2 = {$n2}" . PHP_EOL;
echo "Resultado n3 = {$n3}" . PHP_EOL;

echo "Você deseja fazer a soma de todos os valores? (Y/N)" . PHP_EOL;
$opcaoUsuario = strtolower(trim(fgets(STDIN))); // Usando trim e strtolower para garantir que a entrada seja tratada corretamente

if ($opcaoUsuario == "y") {
    $soma = $n1 + $n2 + $n3;
    echo "A soma dos valores é: {$soma}" . PHP_EOL;
} else {
    echo "Operação cancelada." . PHP_EOL;
}
