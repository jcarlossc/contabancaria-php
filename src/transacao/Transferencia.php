<?php
namespace App\transacao;

/**
 * A classe Transferência é responsável por
 * criar uma instância da transação transferência.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
class Transferencia extends Transacao {

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