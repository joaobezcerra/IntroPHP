<?php

namespace Classes;

class LerArquivo
{
    private $arquivo;

    public function __construct($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function abrirArquivo()
    {
        echo "<br>Abrindo arquivo<br>";
    }

    public function lerArquivo()
    {
        echo "<br>Lendo arquivo<br>";
    }

    public function escreverArquivo()
    {
        echo "<br>Escrevendo arquivo<br>";
    }

    public function fecharArquivo()
    {
        echo "<br>Fechando arquivo<br>";
    }
}