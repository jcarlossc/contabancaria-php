<?php
namespace App\transacao;

/**
 * A classe Transação é responsável por
 * centralizar as operações das classes Depósito,
 * Saque e Transferência.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
class Transacao {

    /**
     * @var float
     */
    private float $valor;
    /**
     * @var string
     */
    private string $tipo;

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     * 
     * @param float $valor
     * @param string $tipo
     */
    public function __construct(float $valor, string $tipo) {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    /**
     * Método que acessa o valor da transação.
     * 
     * @return float valor
     */
    public function getValor() {
        return $this->valor;
    }

    /**
     * Método que acessa o tipo de transação.
     * 
     * @return string tipo de transação.
     */
    public function getTipo() {
        return $this->tipo;
    }
}