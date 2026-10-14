<?php

class contaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct ($titular, $saldo){
        $this -> titular = $titular;
        $this -> saldo= $saldo;
    }

    public function exibirTitular(){
        echo '<br>Nome: ' . $this-> titular;
    }

    public function alteraNome($novoNome){
        $this-> titular = $novoNome;
    }
    public function exibirSaldo(){
        echo "<br> Saldo: " . $this-> saldo;
    }
    public function depositarSaldo ($valor){
        $this -> saldo += $valor;
    }
    public function sacarSaldo ($valor){
        if($valor > $this -> saldo){
            echo "Nao pode sacar";
        }else{
            $this-> saldo -= $valor;
        }
    }

}


$conta1= new contaBancaria ('Lavinia', 1000);
$conta1-> exibirTitular();
$conta1-> alteraNome ('Luiz');
$conta1-> exibirTitular();
$conta1-> exibirSaldo();
$conta1-> sacarSaldo(100);
$conta1-> exibirSaldo();
$conta1-> sacarSaldo(500);
$conta1-> exibirSaldo();