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
            echo "O nome do produto é : " . $this->nome ."<br>"; ;
            echo "O preço do protudo é: " . $this->preco . "<br>";
            echo "A quantidade do produto é: " . $this->quantidade . "<br>";
            
        }

        public function atualizarQuantidade($quantidade){
            $this->quantidade = $quantidade;    
            echo "Quantidade atualizada para: " . $quantidade . "<br>";
          
        }

        public function calcularValorTotal(){
            return $this->preco * $this->quantidade;
        }

    }

    $produto01 = new Produto ("Batata", 15.99, 53); 
    $produto02 = new Produto ("Arroz", 10.99, 100);

    echo "Informações do Produto 01: <br>";
    $produto01->exibirInformacoes();
    echo "Valor total do estoque: R$" . number_format($produto01->calcularValorTotal(), 2, ',', '.') . "<br> <br>";

    echo "Informações do Produto 02:<br>";
    $produto02->exibirInformacoes();
    echo "Valor total do estoque: R$" . number_format($produto02->calcularValorTotal(), 2, ',', '.') . "<br> <br>";

    echo "Atualizando estoque do Produto 01.<br>";
    $produto01->atualizarQuantidade(15);

    echo "Informações do Produto 1 após atualização:<br>";
    $produto01->exibirInformacoes();
    echo "Valor total do estoque: R$" . number_format($produto01->calcularValorTotal(), 2, ',', '.') . "<br>" ;




?>