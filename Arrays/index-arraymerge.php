<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];
  
$saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
];

$relacionados = array_merge($correntistas, $saldos);

echo "<pre>";
var_dump($relacionados);
echo "</pre>";