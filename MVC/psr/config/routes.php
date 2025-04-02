<?php

use Alura\Cursos\Controllers\CursosEmJson;
use Alura\Cursos\Controllers\CursosEmXml;
use Alura\Cursos\Controllers\Deslogar;
use Alura\Cursos\Controllers\Exclusao;
use Alura\Cursos\Controllers\FormularioEdicao;
use Alura\Cursos\Controllers\FormularioInsercao;
use Alura\Cursos\Controllers\FormularioLogin;
use Alura\Cursos\Controllers\ListarCursos;
use Alura\Cursos\Controllers\Persistencia;
use Alura\Cursos\Controllers\RealizaLogin;

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizaLogin::class,
    '/deslogar' => Deslogar::class,
    '/buscarCursosEmJson' => CursosEmJson::class,
    '/buscarCursosEmXml' => CursosEmXml::class
];
