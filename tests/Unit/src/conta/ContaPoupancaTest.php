<?php

use PHPUnit\Framework\TestCase;
use App\conta\ContaPoupanca;
use App\usuario\PessoaFisica;

class ContaPoupancaTest extends TestCase {
  
    public function testContaPoupancaDeposito() {
        $usuario = new PessoaFisica("Carlos da Costa", "12345678989");
        $contaPoupanca = new ContaPoupanca($usuario);
        $contaPoupanca->depositar(444.44);
        $this->assertEquals(444.44, $contaPoupanca->getSaldo());
    }

    public function testContaPoupancaSaque() {
        $usuario = new PessoaFisica("Carlos da Costa", "12345678989");
        $contaPoupanca = new ContaPoupanca($usuario);
        $contaPoupanca->depositar(500.00);
        $contaPoupanca->sacar(300.00);
        $this->assertEquals(200.00, $contaPoupanca->getSaldo());
    }

    public function testContaPoupancaTranferencia() {
        $usuario1 = new PessoaFisica("Carlos da Costa", "12345678989");
        $usuario2 = new PessoaFisica("Jose da Costa", "12345678956");
        $contaPoupanca1 = new ContaPoupanca($usuario1);
        $contaPoupanca2 = new ContaPoupanca($usuario2);
        $contaPoupanca1->transferir($contaPoupanca2, 500.00);
        $this->assertEquals(500.00, $contaPoupanca2->getSaldo());
    }

    public function testContaPoupancaTipoConta() {
        $usuario = new PessoaFisica("Carlos da Costa", "12345678989");
        $contaPoupanca = new ContaPoupanca($usuario);
        $this->assertEquals("Conta Poupança", $contaPoupanca->getTipoConta());
    }
}