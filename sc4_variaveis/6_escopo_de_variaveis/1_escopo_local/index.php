<?php

$falar = "falando GLOBAL" . PHP_EOL;
echo $falar;

function falar()
{
    $falar = "falando LOCAL" . PHP_EOL;
    echo $falar;
}

falar();

$falandoMais = "Falando mais GLOBAL" . PHP_EOL;
echo $falandoMais;

function falando2()
{
    $falandoMais = "Falando mais LOCAL" . PHP_EOL;
    echo $falandoMais;
}

falando2();
