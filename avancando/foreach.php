<?php

$contasCorrentes = [
    '578431872' => [
        'titular' => "Eduardo", 
        'saldo' => 1000
    ], 
    '468456458' => [
        'titular' => "Maria",
        'saldo' => 1500
    ], 
    '548913218' => [
        'titular' => "Pedro",
        'saldo' => 2000
    ]
];

// echo $contasCorrentes[123181231]['titular'];
$contasCorrentes['648654215'] = [
    'titular' => "Carloss",
    'saldo' => 2500
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}