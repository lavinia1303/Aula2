<?php

class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->estoque && $quantidade > 0) {
            $this->estoque -= $quantidade;

            echo "Venda de $quantidade unidades de $this->nome realizada!<br>";
        } else {
            echo "Estoque insuficiente!";
        }
    }

    public function reajustarPreco($percentual) {
        $this->preco += $this->preco * ($percentual / 100);
    }

    public function exibirInfo() {
        echo "$this->nome → R$ " . number_format($this->preco, 2, ',', '.') .
        "   Estoque: $this->estoque unidades";
    }
}

$produto = new Produto("Teclado Gamer", 250, 10);

$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();
