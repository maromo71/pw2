<?php
// exemplo4.php
// Este arquivo demonstra o uso de funções de manipulação de strings em PHP

// Lista de nomes de alunos
$alunos = [
    "João Silva",
    "Maria Oliveira",
    "Pedro Santos",
    "Ana Pereira",
    "Lucas Ferreira"
];

echo "\nManipulação de Strings em PHP\n";
echo "===========================\n\n";

// Demonstração de funções de string
foreach($alunos as $aluno) {
    // Obtendo o comprimento da string
    $tamanho = strlen($aluno);
    
    // Convertendo para maiúsculas
    $maiusculas = strtoupper($aluno);
    
    // Convertendo para minúsculas
    $minusculas = strtolower($aluno);
    
    // Extraindo o primeiro nome
    $partes_nome = explode(" ", $aluno);
    $primeiro_nome = $partes_nome[0];
    
    // Extraindo o sobrenome
    $sobrenome = $partes_nome[1];
    
    // Substituindo caracteres
    $substituido = str_replace(" ", "_", $aluno);
    
    // Exibindo os resultados
    echo "Nome original: $aluno\n";
    echo "Tamanho: $tamanho caracteres\n";
    echo "Em maiúsculas: $maiusculas\n";
    echo "Em minúsculas: $minusculas\n";
    echo "Primeiro nome: $primeiro_nome\n";
    echo "Sobrenome: $sobrenome\n";
    echo "Nome com substituição: $substituido\n\n";
}

// Explicação dos conceitos utilizados
echo "--- CONCEITOS UTILIZADOS ---\n";
echo "1. Funções de String: strlen(), strtoupper(), strtolower(), explode(), str_replace() são funções nativas do PHP para manipulação de strings.\n";
echo "2. Arrays: Utilizamos arrays para armazenar a lista de nomes e também para armazenar as partes do nome após o explode().\n";
echo "3. Iteração: Utilizamos o loop foreach para percorrer cada elemento do array e aplicar as funções de string.\n";
echo "4. Concatenação: Utilizamos o operador de concatenação (.) implicitamente nas strings com variáveis.\n";