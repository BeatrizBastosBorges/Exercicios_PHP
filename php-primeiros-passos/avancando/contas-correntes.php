<?php

$conta1 = [
    'titular' => 'Vinicius', 
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Roberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo "Titular: " . $contasCorrentes[$i]['titular'] . PHP_EOL;
}