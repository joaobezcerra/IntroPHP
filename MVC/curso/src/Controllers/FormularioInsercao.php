<?php

namespace Alura\Cursos\Controllers;

use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('cursos/Formulario.php', [
            'titulo' => 'Novo curso'
        ]);
    }
}
