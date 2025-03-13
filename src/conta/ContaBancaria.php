<?php
namespace App\conta;

use App\usuario\Usuario;

abstract class ContaBancaria {

    private Usuario $usuario;
    protected float $saldo;

    //private Historico $historico;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
        $this->saldo = 0.0;
        //$this->historico = new Historico();
    }

    public function getUsuario() {
        //return $his->usuario;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract public function depositar(float $valor);

    abstract public function sacar(float $valor);
    
    abstract public function transferir(ContaBancaria $contaDestino ,float $valor);

    abstract public function getTipoConta();

}