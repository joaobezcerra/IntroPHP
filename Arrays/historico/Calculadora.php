<?php

class Calculadora
{
    public function calculaMedia(array $notas) : ?float
    {
        $quantidadeNotas = sizeof($notas);

        $soma = 0;

        if($quantidadeNotas > 0) {
            for ($i = 0; $i < $quantidadeNotas; $i++) {
                $soma += $notas[$i];
            }

            $media = $soma / $quantidadeNotas;

            return $media;
        } else {
            return false;
        }
    }
}