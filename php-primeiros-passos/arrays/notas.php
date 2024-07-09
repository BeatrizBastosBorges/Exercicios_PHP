<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => null
];

//asort($notas);
//arsort($notas);

ksort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array';
}

var_dump(array_is_list($notas));

//var_dump(array_key_exists('Vinicius', $notas));
var_dump(isset($notas['Vinicius']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas, true);

// array_key_exist = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifiva se a chave existe e não é nula