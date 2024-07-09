<?php

$alunos2023 = [
    'Ana',
    'João',
    'Maria',
    'Roberto',
    'Vinicius'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

//$alunos2024 = array_merge($alunos2023, $novosAlunos);
//$alunos2024 = $alunos2023 + $novosAlunos;
$alunos2024 = [...$alunos2023, 'Beatriz', ...$novosAlunos];

array_push($alunos2024, 'Alice', 'Bob', 'Charlie'); //adiciona mais de um elemento
$alunos2024[] = 'Luiz'; //adiciona apenas um elemento

array_unshift($alunos2024, 'Stephane', 'Rafaela');

echo array_shift($alunos2024) . PHP_EOL; //remove o primeiro elemento

echo array_pop($alunos2024) . PHP_EOL; //remove o ultimo elemento

var_dump($alunos2024);