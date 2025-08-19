<?php
    session_id('');
    session_start();
    echo "Sessao: " . session_id() . "\n";
    echo "Dados da Sessao criada: \n";
    $_SESSION['usuario'] = "etec";
    $_SESSION['curso'] = "PW2";
    $_SESSION['ano'] = 2025;
    print_r($_SESSION);
