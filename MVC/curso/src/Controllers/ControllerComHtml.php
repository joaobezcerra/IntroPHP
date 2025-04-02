<?php

namespace Alura\Cursos\Controllers;

abstract class ControllerComHtml
{
    //O método desta classe passou a ser utilizado via trait
    public function renderizaHtml(string $caminhoTemplate, array $dados): string
    {
        extract($dados);
        ob_start();

        require __DIR__ . '/../../view/' . $caminhoTemplate;
        $html = ob_get_clean();

        return $html;
    }
}
