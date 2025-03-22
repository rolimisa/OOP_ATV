<?php

   Class Livro{

    private $titulo;
    private $autor;
    private int $ano_publicacao;
    private float $preco;

    function __construct($titulo, $autor, $ano_publicacao, $preco) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
        $this->preco = $preco;

    }

    //function __destruct()
    //{
        // echo "O livro {$this->titulo} foi escrito por {$this->autor} publicado no ano de {$this->ano_publicacao} vendido pelo valor de {$this->preco}.";
        //echo "<br>";
        //echo "<br>";
    //}



    function get_titulo(){
        return $this->titulo;
    }

    function get_autor(){
        return $this->autor;
    }

    function get_ano_publicacao(){
        return $this->ano_publicacao;
    }
    
    function get_preco() {
        return $this->preco;
    }

    function set_preco($novo_preco){
     $this->preco=$novo_preco;

    }

   } 

   
   $livro01 = new Livro("A Palavra que resta", "Stênio Gardel", 2021, 59.90);
   $livro02 = new Livro ("O Avesso da Pele", "Jeferson Tenório", 2020, 50.00); 

   echo " O nome do livro é {$livro01->get_titulo()} \n";
   echo "escrito pelo autor {$livro01->get_autor()}\n";
   echo "publicado no ano de {$livro01->get_ano_publicacao()}\n";
   echo "vendido por R$: {$livro01->get_preco()}";
   echo "<br>";

   echo " O nome do livro é {$livro02->get_titulo()} \n";
   echo "escrito pelo autor {$livro02->get_autor()}\n";
   echo "publicado no ano de {$livro02->get_ano_publicacao()}\n";
   echo "vendido por R$: {$livro02->get_preco()}";
   echo "<br>";

    $livro02->set_preco(45.00);
    echo "O novo preço do livro {$livro02->get_titulo()} é R$ {$livro02->get_preco()}"

?>