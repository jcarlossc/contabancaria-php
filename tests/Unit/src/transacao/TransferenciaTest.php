<?php

use PHPUnit\Framework\TestCase;
use App\transacao\Transferencia;

class TransferenciaTest extends TestCase {
  
    public function testValorTransferencia() {
        $transferencia = new Transferencia(456.55, "Tranferência");
        $this->assertEquals(456.55, $transferencia->getValor());
    }

    public function testTipoTransferencia() {
        $transferencia = new Transferencia(456.55, "Tranferência");
        $this->assertEquals("Tranferência", $transferencia->getTipo());
    }
}