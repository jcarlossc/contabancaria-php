<?php
namespace App\transacao;

/**
 * A classe Depósito é responsável por
 * criar uma instância da transação depósito.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
class Deposito extends Transacao {

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     * 
     * @param float $valor
     * @param string $tipo
     */
    public function __construct(float $valor, string $tipo) {
        parent::__construct($valor, $tipo);
    }
}