<?php

    Class Animal {
        public $nome;
        public $idade;
        public $som;

        function __construct($arg01, $arg02) {
            $this->nome= $arg01;
            $this->idade= $arg02;
        }
            public function fazerSom(){

            }

    }

    Class Cachorro extends Animal{
        function fazerSom() {
           echo "Au Au!";
        }
   
    }

    Class Gato extends Animal {
        function fazerSom(){
            echo "Miau!";
        }

    }

    $cachorro = new Cachorro("Suzi","11 anos");
    $gato = new Gato("Quixa", "5 anos");

    echo "O nome do cachorro é: $cachorro->nome e ela tem $cachorro->idade <br>";
    echo "O som que ele faz é: ";
    echo $cachorro->fazerSom();
    echo "<br>";

    $gato = new Gato("Quixa", "5 anos");
    echo "O nome da gata é: $gato->nome e ela tem $gato->idade <br>";
    echo "O som que ele faz é: ";
    echo $gato->fazerSom();



?>