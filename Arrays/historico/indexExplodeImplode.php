<?php

$nomes = "Ricado, Tati, Ana";

$arrayNomes = explode(", ", $nomes);

foreach ($arrayNomes as $nome) {
    echo "<p>Olá $nome</p>";
}

$nomesNovamente = implode(", ", $arrayNomes);

echo "<p>$nomesNovamente</p>";