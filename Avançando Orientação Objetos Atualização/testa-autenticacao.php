<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$diretor = new Diretor(
    'João da Silva',
    new Cpf('123.456.789-10'),
    10000
);

$gerente = new Gerente(
    'João da Silva',
    new Cpf('123.456.789-10'),
    10000
);

$endereco = new Endereco('Tatuí', 'teste', 'rua teste', '4545d');

$titular = new Titular(
    new Cpf('123.456.789-10'),
    'João da Silva',
    $endereco
);

$autenticador->tentaLogin($diretor, '1234');
$autenticador->tentaLogin($gerente, '4321');
$autenticador->tentaLogin($titular, 'abcd');
