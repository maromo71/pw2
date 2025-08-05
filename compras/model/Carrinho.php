<?php
    //Carrinho.php

    class Carrinho{
        //atributo - vetor de produtos
        private array $produtos = [];
        //método para adicionar produto ao carrinho
        public function adicionarProduto(Produto $produto): void {
            $this->produtos[] = $produto;
        }
        //método para retornar os produtos do carrinho
        public function getProdutos(): array {
            return $this->produtos;
        }
        //método para calcular o total do carrinho
        public function getTotal(): float {
            $total = 0.0;
            foreach ($this->produtos as $produto) {
                $total += $produto->getPreco();
            }
            return $total;
        }

    }