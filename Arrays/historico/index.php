<?php

require 'Calculadora.php';

$notas = [8, 8, 9, 10];

$calculadora = new Calculadora();

$media = $calculadora->calculaMedia($notas);

if($media) {
    echo "A média é $media";
} else {
    echo "Não foi possível calcular a média";
}