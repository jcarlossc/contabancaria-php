<?php
namespace App\conta;

use App\conta\ContaBancaria;
use App\usuario\Usuario;
use App\transacao\Deposito;
use App\transacao\Transferencia;
use App\transacao\Saque;
use Exception;

/**
 * A classe Conta Poupança é responsável por
 * criar uma instância de conta poupança e efetuar
 * as operações de depositar, sacar e transferir.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
class ContaPoupanca extends ContaBancaria {

    private Usuario $usuario;

    private string $tipoConta;

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     * 
     * @param Usuario $usuario
     */
    public function __construct(Usuario $usuario) {
        parent::__construct($usuario);
        $this->tipoConta = "Conta Poupança";
    }

    /**
     * Méodo que realiza a operação de depósio e
     * instancia a transaçõa Depósito.
     * 
     * @param float $valor
     */
    public function depositar(float $valor) {
        try {
            if($valor <= 0) {
                echo "Valor inválido: " . $valor;
            }else {
                $this->saldo += $valor;
                $this->historico->addTransacao(new Deposito($valor, "Depósito"));
            }
        } catch (Exception $e) {
            echo "Operação inválida: " . $e->getMessage();
        }
    }

    /**
     * Méodo que realiza a operação de saque e
     * instancia a transaçõa Saque.
     * 
     * @param float $valor
     */
    public function sacar(float $valor) {
        try {
            if($this->saldo < $valor) {
                echo "Saldo insuficiente: " . $this->saldo;
            }else {
                $this->saldo -= $valor;
                $this->historico->addTransacao(new Saque($valor, "Saque"));
            }
        } catch (Exception $e) {
            echo "Operação inválida: " . $e->getMessage();
        }
    }
    
    /**
     * Méodo que realiza a operação de transferência e
     * instancia a transaçõa Transferência.
     * 
     * @param float $valor
     */
    public function transferir(ContaBancaria $contaDestino ,float $valor) {
        try {
            if($valor <= 0) {
                echo "Valor inválido: " . $valor;
            }else {
                $this->saldo -= $valor;
                $contaDestino->depositar($valor);
                $this->historico->addTransacao(new Transferencia($valor, "Tranferência"));
            }
        } catch (Exception $e) {
            echo "Operação inválida: " . $e->getMessage();
        }
    }

    /**
     * Método que acessa o tipo de conta.
     * 
     * @return string tipo de conta.
     */
    public function getTipoConta() {
        return $this->tipoConta;
    }
}