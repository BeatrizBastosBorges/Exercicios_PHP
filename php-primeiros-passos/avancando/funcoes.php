<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

function titularComLetraMaiusculas (array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function depositar (array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem: "Você não pode depositar este valor");
    }
    return $conta;
}
function sacar (array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo'] || $valorASacar < 0) {
        exibeMensagem(mensagem:"Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}