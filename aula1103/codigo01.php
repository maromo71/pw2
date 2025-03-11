<?php
    //Trabalhando com escopo de variáveis
    $num = 500;

    function teste(){
        $num = 100;
        echo $num . "\n";
        $num++;
        echo $num . "\n";
    }
    teste(); //chamar a funcao

    echo "mostrar o valor de num: $num";