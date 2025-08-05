<?php
    require_once 'model/Cliente.php';
    require_once 'model/Produto.php';
    //Criar um objeto Cliente
    $cliente1 = new Cliente(1, "João da Silva");
    $cliente2 = new Cliente(2, "Maria Oliveira");
    //Simulando a criacao de dois produtos
    $produto1 = new Produto(11, "Mouse Logitech", 89.99);
    $produto2 = new Produto(22, "Teclado Microsoft", 104.88);
    //Exibir detalhes do cliente
    echo $cliente1->exibirDetalhes();
    echo $cliente2->exibirDetalhes();
    //Exibir detalhes dos produtos
    echo $produto1->exibirDetalhes();
    echo $produto2->exibirDetalhes();