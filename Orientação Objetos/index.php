<?php

require 'Validacao.php';
require 'ContaCorrente.php';

$contaJoao = new ContaCorrente("João", "122", "121212-2", 500.00);
$contaMaria = new ContaCorrente("Maria", "122", "121214-2", 1500.00);

echo $contaJoao->titular . PHP_EOL;
echo $contaJoao->getSaldo() . PHP_EOL;
echo $contaJoao . PHP_EOL;

$contaJoao->saldo = 600;

var_dump($contaJoao);
var_dump($contaMaria);

$contaJoao->transferir(200, $contaMaria);

var_dump($contaJoao);
var_dump($contaMaria);