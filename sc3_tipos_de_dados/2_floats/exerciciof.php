<?php

/**
 * Crie um arquivo PHP
 * Imprima três floats
 * Utilize a função is_float em um deles
 */

echo 4.15;
echo "<br>";
echo 12.12;
echo "<br>";

$a = -78.1;

echo $a;
echo "<br>";

if (is_float($a)) {
    echo "É um float negativo";
} else {
    echo "Não é Float";
}
