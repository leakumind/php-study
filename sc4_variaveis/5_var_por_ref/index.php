<?php

// variável por referência

$x = 10;
$y = &$x;

echo $x . PHP_EOL;
echo $y . PHP_EOL;

$y = 15;
echo "Atribuição após referência 1" . PHP_EOL;

echo $x . "\n";
echo $y . "\n";

$x = 20;
echo "Atribuição após referência 2" . PHP_EOL;

echo $x . "\n";
echo $y;
