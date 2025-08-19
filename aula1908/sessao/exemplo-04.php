<?php
    require_once "config.php";
    $_SESSION['usuario'] = "Etec";
    echo "Sessão iniciada com sucesso! \n";
    echo "Id da Sessao: " . session_id() . "\n";
    echo "\n";