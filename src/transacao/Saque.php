<?php
namespace App\transacao;

class Saque extends Transacao {

    public function __construct(float $valor, string $tipo) {
        parent::__construct($valor, $tipo);
    }
}