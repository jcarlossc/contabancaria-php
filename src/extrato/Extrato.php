<?php
namespace App\extrato;

use App\calendario\Calendario;
use App\conta\ContaBancaria;

class Extrato {

    private Calendario $dataHora;

    public function __construct() {
        $this->dataHora = new Calendario();
    }

    public function getExtrato(ContaBancaria $conta) {

        echo "<pre>";
        echo "<br>-------------------- EXTRATO --------------------<br>";
        echo "TIPO DE CONTA: " . $conta->getTipoConta() . "<br>";
        echo "TITULAR: " . $conta->getUsuario()->getNome() . "<br>";
        echo "SALDO: " . $conta->getSaldo() . "<br>";
        echo "DATA: " . $this->dataHora->getData() . "<br>";
        echo "HORA: " . $this->dataHora->getHora() . "<br>";
        if($conta->getUsuario()->getTipoUsuario() == "Pessoa Física") {
            echo "TIPO DE USUÁRIO: " . "PessoaFísica" . "<br>";
        }else {
            echo "TIPO DE USUÁRIO: " . "Pessoa Jurídica" . "<br>";
        }
        for ($i=0; $i < count($conta->getHistorico()->getTransacoes()); $i++) { 
             print_r($conta->getHistorico()->getTransacoes()[$i]);
        }
        echo "<pre/>";

        
    }
}


