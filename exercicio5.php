<?php

class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anoPublicacao;

    public function __construct($valor1, $valor2, $valor3, $valor4= ('Desconhecido')){
      $this-> titilo= $valor1;
      $this-> autor= $valor2;
      $this-> paginas= $valor3;
      $this-> anoPublicacao= $valor4;  
    }

    public function exibirLivros(){
      echo 'Título: ' . $this->titulo . ', Autor: ' . $this->autor . ', Paginas: ' . $this->paginas . ', Publicado em: ' . $this->anoPublicacao;
    }
}

$livro1= new Livro ('Dom Casmurro', 'Machado de Assis', 256);
$livro2= new Livro ('Memorias Postumas', 'Machado de Assis', 160, 1881);

$livro1 -> exibirLivros();
$livro2 -> exibirLivros();
