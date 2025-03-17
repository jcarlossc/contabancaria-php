<?php
namespace App\conta;

use App\usuario\Usuario;
use App\historico\Historico;

/**
 * A classe abstrata Conta Bancária é responsável
 * por centralizar as operações das classes Conta Corrente e
 * Conta Poupança.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
abstract class ContaBancaria {

    /**
     * @var Usuario
     */
    private Usuario $usuario;
    /**
     * @var float
     */
    protected float $saldo;

    /**
     * @var Historico
     */
    protected Historico $historico;

    /**
     * Método construtor.
     * 
     * @param Usuario $usuario
     */
    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
        $this->saldo = 0.0;
        $this->historico = new Historico();
    }

    /**
     * Método que acessa o objeto Usuário.
     * 
     * @return object usuário
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * Método que acessa o saldo.
     * 
     * @return float 
     */
    public function getSaldo() {
        return $this->saldo;
    }

    /**
     * Método que acessa o objeto histórico.
     * 
     * @return object histórico
     */
    public function getHistorico() {
        return $this->historico;
    }

    /**
     * Método abstrato que realiza o depósito.
     * 
     * @param float $valor
     * 
     * @return 
     */
    abstract public function depositar(float $valor);

    /**
     * Método abstrato que realiza o saque.
     * 
     * @param float $valor
     * 
     * @return 
     */
    abstract public function sacar(float $valor);
    
    /**
     * Método abstrato que realiza a transferência..
     * 
     * @param float $valor
     * 
     * @return 
     */
    abstract public function transferir(ContaBancaria $contaDestino ,float $valor);

    /**
     * Método abstrato que acessa o tipode conta.
     * 
     * @param float $valor
     * 
     * @return string tipo de conta.
     */
    abstract public function getTipoConta();

}