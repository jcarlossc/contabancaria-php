<?php
namespace App\historico;

use App\transacao\Transacao;
use App\calendario\Calendario;
use DateTime;

class Historico {

    private Transacao $transacao;

    private array $transacoes;
    private Calendario $dataHora;

    public function __construct() {
        $this->transacoes = [];
        $this->dataHora = new Calendario();
    }

    public function addTransacao(Transacao $transacao) {
        $transacoesArray = [
            "VALOR DA TRANSAÇÂO" => $transacao->getValor(),
            "TIPO DE TRANSAÇÃO" => $transacao->getTipo(),
            "DATA DA TRANSAÇÃO" => $this->dataHora->getData(),
            "HORA DA TRANSAÇÃO" => $this->dataHora->getHora()
        ];
        $this->transacoes[] = $transacoesArray;
    }

    public function getTransacoes() {
        return $this->transacoes;
    }
}