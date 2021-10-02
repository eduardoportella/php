<?php

// $idadeList = array(21, 23, 19, 30, 47, 60, 14);
$idadeList = [21, 23, 19, 30, 47, 60, 14];

list($idadeEduardo, $idadeJoao, $idadeMaria) = $idadeList;
unset($idadeList[4]);

echo $idadeList[2];