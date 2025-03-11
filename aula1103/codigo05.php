<?php
    $nome = "Rodrigo";
    $salario = 22000;
    $cargo = "Professor de Desenvolvimento";
    $percentualAumento = 0.11;
    $aumento = $salario * $percentualAumento;
    $salario += $aumento;
    $saida = "O professor $nome receberá o "
       . " novo salário de R$ $salario\n";
    echo $saida;