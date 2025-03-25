<?php
    $valores = [12, 1, 3, 5, 11, 23, 1, 18, 34];
    //Apresentar o maior e o menor valor
    $maior = $valores[0];
    $menor = $valores[0];
    for($i=1 ; $i<=8; $i++){
     if($valores[$i] > $maior){
        $maior = $valores[$i]; 
     }   
     if($valores[$i] < $menor){
        $menor = $valores[$i];
     } 
    }
    echo "Maior valor $maior \n";
    echo "Menor valor $menor \n";