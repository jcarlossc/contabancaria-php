<?php
namespace App\extrato;

use App\calendario\Calendario;
use App\conta\ContaBancaria;

/**
 * A classe Extrato é responsável por
 * imprimir as informações e transações
 * dos clientes.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
class Extrato {

    /**
     * @var Calendario
     */
    private Calendario $dataHora;

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     */
    public function __construct() {
        $this->dataHora = new Calendario();
    }

    /**
     * Método responsável pela impressão das 
     * informações e movimentações dos clientes.
     * 
     * @param ContaBancaria $conta
     * 
     */
    public function getExtrato(ContaBancaria $conta) {

        echo "<pre>";
        echo "<br>-------------------- <h2 style='display: inline'>EXTRATO</h2> --------------------<br>";
        echo "TIPO DE CONTA: " . "<b>" . $conta->getTipoConta() . "</b>" . "<br>";
        echo "TITULAR: " . "<b>" . $conta->getUsuario()->getNome() . "</b>"  . "<br>";
        echo "SALDO: R$ " . "<b>" . number_format($conta->getSaldo(), 2,",",".") . "</b>"  . "<br>";
        echo "DATA: " . "<b>" . $this->dataHora->getData() . "</b>"  . "<br>";
        echo "HORA: " . "<b>" . $this->dataHora->getHora() . "</b>"  . "<br>";
        if($conta->getUsuario()->getTipoUsuario() == "Pessoa Física") {
            echo "TIPO DE USUÁRIO: " . "<b>PessoaFísica</b>" . "<br>";
        }else {
            echo "TIPO DE USUÁRIO: " . "<b>Pessoa Jurídica</b>" . "<br>";
        }
        echo "--- LISTA DE TRANSAÇÕES: ---" . "<br>";
        for ($i=0; $i < count($conta->getHistorico()->getTransacoes()); $i++) { 
             print_r($conta->getHistorico()->getTransacoes()[$i]);
        }
        echo "<br>---------------------- <h2 style='display: inline'>FIM</h2> ----------------------<br>";
        echo "<pre/>";

        
    }
}


