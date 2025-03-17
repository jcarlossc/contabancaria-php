<?php

use PHPUnit\Framework\TestCase;
use App\transacao\Deposito;

class DepositoTest extends TestCase {
  
    public function testValorDeposito() {
        $deposito = new Deposito(444.44, "Depósito");
        $this->assertEquals(444.44, $deposito->getValor());
    }

    public function testTipoDeposito() {
        $deposito = new Deposito(456.55, "Depósito");
        $this->assertEquals("Depósito", $deposito->getTipo());
    }
}