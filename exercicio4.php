<?php

class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct ($nome, $salario= (1000)){
        $this -> nome = $nome;
        $this -> salario= $salario;
    }
    public function exibirSalario(){
        echo '<br>Nome: ' . $this-> nome . '<br> Salario: ' . $this-> salario;
    }
    public function aumentarSalario ($percentual){
        if($percentual > 0 && $percentual <= 10){
            $this -> salario += $percentual;
            echo 'Seu salario com aumento: ' . $this-> salario;
        }else{
            echo 'Erro';
        }
    }

}


$func= new Funcionario ('Lavinia', 3000);
$func-> exibirSalario();
$func-> aumentarSalario(10);
$func-> exibirSalario();
