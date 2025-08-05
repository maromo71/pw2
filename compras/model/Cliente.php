<?php
    //Cliente.php
    class Cliente{
        //atributos
        private int $id;
        private string $nome;

        //método construtor
        public function __construct(int $id, string $nome){
            $this->id = $id;
            $this->nome = $nome;
        }
        //métodos getters
        public function getId(): int {
            return $this->id;
        }
        public function getNome(): string {
            return $this->nome;
        }
        //Método comum
        public function exibirDetalhes(): string {
            return "ID:   $this->id   Nome:   $this->nome \n";
        }

    }