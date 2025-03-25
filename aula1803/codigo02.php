<?php
    $pecas  = [23, 14, 11, 10, 9, 16, 3];
    $total = 0;
    for($i=0; $i<=6; $i++){
        $total = $total  + $pecas[$i];
    }
    echo "Total de pecas: $total \n";
    echo "Fim do programa";
