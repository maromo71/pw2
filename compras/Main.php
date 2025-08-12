<?php
    require_once 'model/Cliente.php';
    require_once 'model/Produto.php';
    require_once 'model/Carrinho.php';
    require_once 'model/Pedido.php';
    //Criar um objeto Cliente
    $cliente1 = new Cliente(1, "João da Silva");
    $cliente2 = new Cliente(2, "Maria Oliveira");
    //Simulando a criacao dos produtos
    $produto1 = new Produto(11, "Mouse Logitech", 89.99);
    $produto2 = new Produto(22, "Teclado Microsoft", 104.88);
    $produto3 = new Produto(33, "Monitor LG", 899.90);
    $produto4 = new Produto(44, "Headset Razer", 299.99);
    $produto5 = new Produto(55, "Webcam Intelbras", 199.99);
    $produto6 = new Produto(66, "Cadeira Gamer", 1299.90);
    $produto7 = new Produto(77, "Mesa Gamer", 499.90);
    //Criar o carrinho de compras do Joao
    $carrinhoJoao = new Carrinho();// carrinho vazio
    //Adicionar produtos ao carrinho do Joao
    $carrinhoJoao->adicionarProduto($produto3);
    $carrinhoJoao->adicionarProduto($produto6);
    $carrinhoJoao->adicionarProduto($produto7);
    //Fechar o pedido do Joao
    $pedidoJoao = new Pedido($cliente1, $carrinhoJoao);
    //Exibir os detalhes do pedido do Joao
    $pedidoJoao->exibirDetalhes();
    echo "\n\n";
    //Criar o carrinho de compras da Maria
    $carrinhoMaria = new Carrinho();// carrinho vazio
    //Adicionar produtos ao carrinho da Maria
    $carrinhoMaria->adicionarProduto($produto2);
    $carrinhoMaria->adicionarProduto($produto3);
    //Fechar o pedido da Maria
    $pedidoMaria = new Pedido($cliente2, $carrinhoMaria);
    //Exibir os detalhes do pedido da Maria
    $pedidoMaria->exibirDetalhes();
    echo "\n\n";