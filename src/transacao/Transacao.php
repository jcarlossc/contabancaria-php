<?php
namespace App\transacao;

class Transacao {

    private float $valor;
    private string $tipo;

    public function __construct(float $valor, string $tipo) {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getTipo() {
        return $this->tipo;
    }

}