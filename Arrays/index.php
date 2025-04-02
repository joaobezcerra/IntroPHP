<?php

namespace Alura;

require 'autoload.php';

use Alura\ArrayUtils;

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];
  
$saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
];

$relacionados = array_combine($correntistas, $saldos);

echo "<pre>";
var_dump($relacionados);
echo "</pre>";

echo '<br>';

echo "O saldo do Luis é: {$relacionados['Luis']}<br>";

if (array_key_exists("Ricardo", $relacionados)) {
    echo "O saldo é: {$relacionados["Rafael"]}<br>";
} else {
    echo "Não foi encontrado.<br>";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(5000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";