<?php
    $nomes = [
        "Ze Ramalho",
        "Maria",
        "Oscar",
        "Ana",
        "Paulo",
        "Jose",
        "Adao"
    ];
    for($i =sizeof($nomes) -1; $i>=0; $i--){
        echo $nomes[$i] . "\n";
    }
    //Para encontrar o primeiro nome da ordem alfa
    $primeiro = $nomes[0];
    $ultimo = $nomes[0];
    for($i=1; $i<=sizeof($nomes) - 1; $i++){
        if($nomes[$i] < $primeiro) $primeiro = $nomes[$i];   
        if($nomes[$i] > $ultimo) $ultimo = $nomes[$i];
    }
    echo "Primeiro nome: $primeiro \n";
    echo "Ultimo nome: $ultimo \n";