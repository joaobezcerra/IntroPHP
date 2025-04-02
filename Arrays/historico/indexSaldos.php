<?php

$saldos = [
    2500,
    3500,
    3000,
    1000,
    4800
];

foreach ($saldos as $saldo) {
    echo "<p>O saldo é $saldo</p>";
}

sort($saldos);

echo "<p>O menor saldo é $saldos[0]</p>";