<?php

class Carro {

    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = (10), $tanqueInicial = (0)){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            echo "Abastecidos $litros litro(s) no {$this->modelo}.<br>";
        } else {
            echo "Erro: informe uma quantidade positiva de combustível.<br>";
        }
    }

    public function dirigir($km) {
        $necessario = $km / $this->consumo;

        if ($necessario <= $this->tanque) {
            $this->tanque -= $necessario;
            echo "O carro {$this->modelo} percorreu $km km e consumiu "
                . number_format($necessario, 2, ',', '') . " litros.<br>";
        } else {
            echo "Não há combustível suficiente para percorrer $km km.<br>";
        }
    }

    public function exibirInfo() {
        echo "Modelo: " . $this->modelo . "| Consumo: " . $this->consumo . "km/L | Tanque: " . number_format($this->tanque, 2, ',', '.') . " L<br>";
    }
}

$carro = new Carro("Honda Civic", 12, 20);

$carro->exibirInfo();
$carro->dirigir(60);
$carro->abastecer(10);
$carro->exibirInfo();