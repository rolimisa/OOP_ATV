<?php
    Class Produto {
        public $nome;
        public float $preco;
        public $quantidade;


        function __construct($nome, $preco, $quantidade)
        {   
            $this->nome=$nome;
            $this->preco=$preco;
            $this->quantidade=$quantidade;

        }

        public function exibirInformacoes(){
            echo "O nome do produto é : $this->nome";
            echo "O preço do protudo é: $this->preco";
            echo "A quantidade do produto e: $this->quantidade";
            
        }

        public function atualizarQuantidade(){
          
        }

        public function calcularValorTotal(){
            
        }

    }

    $produto01 = new Produto ("Batata", 15.99, 53); 



?>