<?php

echo 2 + 2 * 5 . PHP_EOL;

echo (2 + 2) * 5 . PHP_EOL;

echo 5 + 2 / 10 . PHP_EOL;

$a = 5;
$b = 2;
$c = 10;

echo $a + $b / $c . PHP_EOL;

echo $c + $b / $a . PHP_EOL;

echo ($b + $c) / $a . PHP_EOL;


$d = ($a + $b) * $c;
echo $d;
