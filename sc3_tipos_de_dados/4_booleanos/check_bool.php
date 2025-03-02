<?php

$a = true;

if (is_bool($a)) {
    echo "É um Booleano 1" . PHP_EOL;
}

if (is_bool(0)) {
    echo "É um booleano 2" . PHP_EOL;
}

if (is_bool(false)) {
    echo "É um booleano 3" . PHP_EOL;
}
