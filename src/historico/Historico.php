<?php
namespace App\historico;

use App\transacao\Transacao;
use App\calendario\Calendario;
use DateTime;

/**
 * A classe Histórico é responsável por
 * criar um históricos das transações.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
class Historico {

    /**
     * @var array
     */
    private array $transacoes;
    /**
     * @var Calendario
     */
    private Calendario $dataHora;

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     */
    public function __construct() {
        $this->transacoes = [];
        $this->dataHora = new Calendario();
    }

    /**
     * Método responsável por adicionar
     * as transações.
     * 
     * @param Transacao $transacao
     */
    public function addTransacao(Transacao $transacao) {
        $transacoesArray = [
            "VALOR DA TRANSAÇÂO" => "R$ " . number_format($transacao->getValor(), 2, ",", "."),
            "TIPO DE TRANSAÇÃO" => $transacao->getTipo(),
            "DATA DA TRANSAÇÃO" => $this->dataHora->getData(),
            "HORA DA TRANSAÇÃO" => $this->dataHora->getHora()
        ];
        $this->transacoes[] = $transacoesArray;
    }

    /**
     * @return array transacoes
     */
    public function getTransacoes() {
        return $this->transacoes;
    }
}