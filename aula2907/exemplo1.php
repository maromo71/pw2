<?php
include_once 'biblioteca.php';
// exemplo1.php
$valores = [11, 5, 6, 7 , 8, 3, 12];


// Chamada da função
ordenar_vetor($valores);
$menor_valor = menor_valor($valores);
$maior_valor = maior_valor($valores);
echo "O menor valor é: $menor_valor \n";
echo "O maior valor é: $maior_valor \n";
