<?php

    Class Funcionario {
        public $nome;
        protected $salario;
        private $senha;

     
        function __construtc($arg01, $arg02, $arg03){
            $this->nome= $arg01;
            $this->salario = $arg02;
            $this->senha=$arg03;
        }

        public function get_Salario(){
            return $this ->salario;
        }

        public function set_Salario($sa){
            $this->salario= $sa;

        }


        public function get_Senha(){
            return $this->senha;
        }

        public function set_Senha($s){
            $this->senha= $s;

        }


        public function aumentarSalario($percentual=3){
            $this->salario += ($this->salario * $percentual / 100);

        }

        public function exibirInformacoes() {
            echo "Nome: {$this->nome}<br>";
            echo "Salário: R$ {$this->salario}<br>";
        }



    }
    
    $funcionario = new Funcionario ("José Fernando", 1900, 123);
    echo $funcionario->exibirInformacoes();
    echo "<br>";

    echo $funcionario ->aumentarSalario();
    

?>