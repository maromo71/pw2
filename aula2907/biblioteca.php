<?php

// biblioteca.php

function menor_valor($vetor){
    $menor = $vetor[0];
    //varrendo o vetor usando comando for
    for($i = 1; $i < count($vetor); $i++){
        if($vetor[$i] < $menor){
            $menor = $vetor[$i];
        }
    }
    return $menor;
}

function maior_valor($vetor){
    $maior = $vetor[0];
    //varrendo o vetor usando comando for
    for($i = 1; $i < count($vetor); $i++){
        if($vetor[$i] > $maior){
            $maior = $vetor[$i];
        }
    }
    return $maior;
}

function ordenar_vetor($vetor) {
    sort($vetor);
    foreach ($vetor as $valor) {
        echo "[$valor ]";
    }
    echo "\n";
}