<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario = new Desenvolvedor(
    'Ricardo',
    new Cpf('123.456.789-10'),
    1000
);

$funcionario->sobeDeNivel();

$funcionaria = new Gerente(
    'Teste Funcionaria',
    new Cpf('987.654.321-10'),
    3000
);

$diretor = new Diretor(
    'Teste Diretor',
    new Cpf('987.423.232-10'),
    5000
);

$editor = new EditorVideo(
    'Teste Editor Video',
    new Cpf('987.423.232-10'),
    1500
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($funcionaria);
$controlador->adicionaBonificacaoDe($diretor);
$controlador->adicionaBonificacaoDe($editor);

echo $controlador->recuperaTotal();
