<?php
namespace App\historico;

use App\transacao\Transacao;

class Historico {

    private Transacao $transacao;

    private array $transacoes;

    public function __construct() {
        $this->transacoes = [];
    }

    public function addTransacao(Transacao $transacao) {
        $this->transacoes[] = $transacao;
    }

    public function getTransacoes() {
        return $this->transacoes;
    }
}