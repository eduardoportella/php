<?php

$array = [
    1 => 'a',
    '1' => 'b', //PHP entendeu como inteiro e sobrescreveu o índice
    1.5 => 'c', //Converteu pra inteiro e sobrescreveu
    true => 'd'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}