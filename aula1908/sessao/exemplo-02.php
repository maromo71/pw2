<?php
    require_once "exemplo-01.php";
    echo $_SESSION['nome'];
    echo "\n";
    echo $_SESSION['produto'];
    echo "\n";
    session_unset(); // Limpa as variáveis de sessão
    session_destroy(); // Destrói a sessão
    echo $_SESSION['nome']; // Isso não deve exibir 
    // nada, pois a sessão foi destruída
    echo "\n";
    echo $_SESSION['produto']; //Idem
    echo "\n";