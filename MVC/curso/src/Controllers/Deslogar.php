<?php

namespace Alura\Cursos\Controllers;

class Deslogar implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: login');
    }
}
