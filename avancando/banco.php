<?php

// include 'funcoes.php'; //tenta pegar o arquivo, se na conseguir continua o codigo
require_once 'funcoes.php';

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

$contasCorrentes['578431872'] = sacar($contasCorrentes['578431872'], 2000);
$contasCorrentes['468456458'] = sacar(
    $contasCorrentes['468456458'],
    1000
);

$contasCorrentes['578431872'] = depositar(
    $contasCorrentes['578431872'],
    -2
);

unset($contasCorrentes['548913218']);

titularComLetrasMaiusculas($contasCorrentes['578431872']);

// echo "<ul>";
// foreach($contasCorrentes as $cpf => $conta){
//     exibeConta($conta);
// }
// echo "</ul>";

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){ ?>
            <dt>
                <?= $conta['titular']; ?> - <?= $cpf; ?>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
        
    </dl>
</body>
</html>