<?php

namespace Alura\Cursos\Controllers;

use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class FormularioLogin implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('login/Formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}
