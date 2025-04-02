<?php

ini_set("display_errors", 1);

require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\sistemainterno\GerenciadorBonificacao;

$diretor = new Diretor('345.454.545-55', 2000);
$designer = new Designer('345.454.543-55');

var_dump($diretor);
var_dump($designer);
echo '<br>';

echo $diretor->getBonificacao();
$diretor->senha = "123456";
echo '<br>';
echo $designer->getBonificacao();
echo '<br>';

$gerenciador = new GerenciadorBonificacao;


$gerenciador->AutentiqueAqui($diretor, "123456");
$gerenciador->registrar($diretor);
$gerenciador->registrar($designer);

echo $gerenciador->getTotalBonificacoes();

// var_dump($diretor->autenticar("123456"));

// echo '<br>';
// var_dump($diretor);
// var_dump($designer);