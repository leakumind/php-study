<?php

// function teste()
// {
//     $a = 0;
//     $a++;

//     echo $a . PHP_EOL;
// }

// teste();
// teste();
// teste();

function testeStatic()
{
    static $a = 0;
    $a++;

    echo $a . PHP_EOL;
}

testeStatic();
testeStatic();
testeStatic();
