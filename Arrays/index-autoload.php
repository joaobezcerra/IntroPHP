<?php

namespace Alura;

require 'autoload.php';

$notas = [8, 8, 9, 10];

$calculadora = new Calculadora();

$media = $calculadora->calculaMedia($notas);

if($media) {
    echo "A média é $media";
} else {
    echo "Não foi possível calcular a média";
}

echo "=========" . PHP_EOL;

$correntistas_e_compras = [
    "Giovanni",
     12,
    "Maria",
     25,
    "Luis",
    "Luísa",
    "12"
];

echo "<pre>";
var_dump($correntistas_e_compras);

ArrayUtils::remover("12", $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";