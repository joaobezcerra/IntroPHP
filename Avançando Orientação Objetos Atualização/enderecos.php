<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;


$umEndereco = new Endereco(
    'Tatuí',
    'bairro teste',
    'rua 1',
    '71b'
);

$outroEndereco = new Endereco(
    'São Paulo',
    'Centro',
    'Uma rua',
    '411'
);


echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

$umEndereco->rua = 'Rua de teste';

echo $umEndereco->rua;
