<?php

class Pessoa{
    public string $nome;
    public int $idade;

    //Metodo construtor, deixa alguns campos obrigatorios para ser preenchidos
    public function __construct($nome, $idade){
        $this ->nome= $nome;
        $this -> idade= $idade;
    }

    public function exibirDadosPessoa(){
        echo "Nome: " . $this-> nome . "    Idade: " . $this-> idade;
    }
}

$pessoa = new Pessoa('Lavinia', 16);
$pessoa -> exibirDadosPessoa();
//$pessoa= new Pessoa();
//$pessoa -> idade = 23;

