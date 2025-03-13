<?php
namespace App\conta;

use App\conta\ContaBancaria;
use App\usuario\Usuario;
use Exception;

class ContaCorrente extends ContaBancaria {

    private Usuario $usuario;

    private string $tipoConta;

    public function __construct(Usuario $usuario) {
        parent::__construct($usuario);
        $this->tipoConta = "Conta Corrente";
    }

    public function depositar(float $valor) {
        try {
            if($valor <= 0) {
                echo "Valor inválido: " . $valor;
            }else {
                $this->saldo += $valor;
            }
        } catch (Exception $e) {
            echo "Operação inválida: " . $e->getMessage();
        }
    }

    public function sacar(float $valor) {
        try {
            if($this->saldo < $valor) {
                echo "Saldo insuficiente: " . $this->saldo;
            }else {
                $this->saldo -= $valor;
            }
        } catch (Exception $e) {
            echo "Operação inválida: " . $e->getMessage();
        }
    }
    
    public function transferir(ContaBancaria $contaDestino ,float $valor) {
        try {
            if($valor <= 0) {
                echo "Valor inválido: " . $valor;
            }else {
                $this->saldo -= $valor;
                $contaDestino->depositar($valor);
            }
        } catch (Exception $e) {
            echo "Operação inválida: " . $e->getMessage();
        }
    }

    public function getTipoConta() {
        return $this->tipoConta;
    }
}