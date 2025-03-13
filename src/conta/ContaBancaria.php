<?php
namespace App\conta;

use App\usuario\Usuario;
use App\historico\Historico;

abstract class ContaBancaria {

    private Usuario $usuario;
    protected float $saldo;

    protected Historico $historico;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
        $this->saldo = 0.0;
        $this->historico = new Historico();
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getHistorico() {
        return $this->historico;
    }

    abstract public function depositar(float $valor);

    abstract public function sacar(float $valor);
    
    abstract public function transferir(ContaBancaria $contaDestino ,float $valor);

    abstract public function getTipoConta();

}