<?php

$str = "String";
$num = 12;

if (is_string($str)) {
    echo "é uma string <br>" . PHP_EOL;
} else {
    echo "Não é uma string";
}

if (is_string("dasdas")) {
    echo "É umas string 2";
}
