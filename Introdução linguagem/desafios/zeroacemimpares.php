<?php

echo "Exibir todos os números impares de 0 a 100." . PHP_EOL;

for ($i=1; $i <= 100; $i++) {
    if($i % 2 != 0){
        echo $i . PHP_EOL;
    }
}