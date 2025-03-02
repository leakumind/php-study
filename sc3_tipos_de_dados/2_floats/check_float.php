<?php

$a = "teste";
$b = 12.8;

if (is_float($a)) {
    echo "É um float 1";
} elseif (is_float($b)) {
    echo "É um float 2";
} elseif (is_float(2342.23)) {
    echo "É um float 3";
} elseif (is_float(232)) {
    echo "É um float 4";
}
