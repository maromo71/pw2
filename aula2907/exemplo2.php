<?php
    //exemplo2.php
    //Lista de nomes de alunos
    $alunos = [
        "João",
        "Maria",
        "Pedro",
        "Ana",
        "Lucas"
    ];

    //Exibe a lista de alunos
   foreach($alunos as $aluno){
    echo "Nome do aluno: $aluno \n";
   }

   //Gostaria de exibir os nome de cada aluno, mostrando a 
   //quantidade de letras de cada nome
   foreach($alunos as $aluno){
       $quantidadeLetras = strlen($aluno);
       echo "Nome do aluno: $aluno - letras: $quantidadeLetras \n";
   }