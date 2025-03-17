<?php

use PHPUnit\Framework\TestCase;
use App\conta\ContaCorrente;
use App\usuario\PessoaFisica;

class ContaCorrenteTest extends TestCase {
  
    public function testContaPoupancaDeposito() {
        $usuario = new PessoaFisica("Carlos da Costa", "12345678989");
        $contaCorrente = new ContaCorrente($usuario);
        $contaCorrente->depositar(444.44);
        $this->assertEquals(444.44, $contaCorrente->getSaldo());
    }

    public function testContaPoupancaSaque() {
        $usuario = new PessoaFisica("Carlos da Costa", "12345678989");
        $contaCorrente = new ContaCorrente($usuario);
        $contaCorrente->depositar(500.00);
        $contaCorrente->sacar(300.00);
        $this->assertEquals(200.00, $contaCorrente->getSaldo());
    }

    public function testContaPoupancaTranferencia() {
        $usuario1 = new PessoaFisica("Carlos da Costa", "12345678989");
        $usuario2 = new PessoaFisica("Jose da Costa", "12345678956");
        $contaCorrente1 = new ContaCorrente($usuario1);
        $contaCorrente2 = new ContaCorrente($usuario2);
        $contaCorrente1->transferir($contaCorrente2, 500.00);
        $this->assertEquals(500.00, $contaCorrente2->getSaldo());
    }

    public function testContaPoupancaTipoConta() {
        $usuario = new PessoaFisica("Carlos da Costa", "12345678989");
        $contaCorrente = new ContaCorrente($usuario);
        $this->assertEquals("Conta Corrente", $contaCorrente->getTipoConta());
    }
}