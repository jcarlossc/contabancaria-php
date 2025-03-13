<?php
namespace App\transacao;

class Transferencia extends Transacao {

    public function __construct(float $valor, string $tipo) {
        parent::__construct($valor, $tipo);
    }
}