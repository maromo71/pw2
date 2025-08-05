<?php
// exemplo3.php
// Este arquivo demonstra o uso de arrays associativos em PHP

// Incluindo a biblioteca de funções
include_once 'biblioteca.php';

// Criando um array associativo com notas de alunos
$notas_alunos = [
    "João" => 8.5,
    "Maria" => 9.0,
    "Pedro" => 7.5,
    "Ana" => 10.0,
    "Lucas" => 6.5
];

// Exibindo as notas de cada aluno
echo "\nNotas dos alunos:\n";
foreach($notas_alunos as $aluno => $nota) {
    echo "$aluno: $nota\n";
}

// Calculando a média das notas
$soma_notas = array_sum($notas_alunos);
$quantidade_alunos = count($notas_alunos);
$media = $soma_notas / $quantidade_alunos;

echo "\nMédia da turma: $media\n";

// Encontrando a maior e menor nota usando as funções da biblioteca
$valores_notas = array_values($notas_alunos);
$menor_nota = menor_valor($valores_notas);
$maior_nota = maior_valor($valores_notas);

echo "\nMenor nota: $menor_nota\n";
echo "Maior nota: $maior_nota\n";

// Encontrando o aluno com a maior nota
$aluno_maior_nota = array_search($maior_nota, $notas_alunos);
echo "\nAluno com maior nota: $aluno_maior_nota\n";

// Explicação dos conceitos utilizados:
echo "\n--- CONCEITOS UTILIZADOS ---\n";
echo "1. Arrays Associativos: Permitem associar valores a chaves específicas, como nomes de alunos às suas notas.\n";
echo "2. Funções de Array: array_sum(), count(), array_values(), array_search() são funções nativas do PHP para manipulação de arrays.\n";
echo "3. Reutilização de Código: Utilizamos as funções menor_valor() e maior_valor() da biblioteca.php.\n";