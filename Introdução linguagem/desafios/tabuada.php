<?php

echo "Exibir a tabuada de um determinado número." . PHP_EOL;

$numero = 5;

for ($i=1; $i <= 10; $i++) {
    echo "$numero x $i = " . $numero * $i . PHP_EOL;
}