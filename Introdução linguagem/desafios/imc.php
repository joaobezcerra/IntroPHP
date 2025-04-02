<?php

echo "Calcular o IMC." . PHP_EOL;

$peso = 100;
$altura = 1.82;

$imc = $peso / $altura ** 2;

echo "Seu IMC é $imc, você está ";

if($imc < 18.5){
    echo "abaixo";
} elseif($imc < 25){

} else {
    echo 'acima';
}

echo " do recomendado.";