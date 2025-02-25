<?php
    //funcao que exibe a hora local, formatação de data
    date_default_timezone_set("America/Sao_Paulo");
    $dataHoje = date("d/m/y", time());
    $horaAtual = date("H:i:s", time());
    echo "Hoje é $dataHoje e agora sao $horaAtual horas";