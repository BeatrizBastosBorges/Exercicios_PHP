<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius', 
        'saldo' => 1000
    ], 
    '123.456.689-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '123.256.789-12' => [
        'titular' => 'Roberto',
        'saldo' => 300
    ]
];

/*
$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];
*/

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}