<?php

class Funcionario {
    public $nome; 
    protected $salario; 
    private $senha; 

    public function __construct($nome, $salario, $senha) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->senha = $senha;
    }


    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "\n";
        echo "Salário: R$" . $this->salario . "\n";
    }

  
    public function getSalario() {
        return $this->salario;
    }

    
    public function setSenha($novaSenha) {
        $this->senha = $novaSenha;
        
    }

   
    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * ($percentual / 100);
        echo "Salário aumentado em $percentual%!\n";
    }
}

$funcionario = new Funcionario("Jose Ribeiro", 5000, "1234");


$funcionario->exibirInformacoes();


$funcionario->setSenha("novaSenha123");


$funcionario->aumentarSalario(20);


$funcionario->exibirInformacoes();
?>