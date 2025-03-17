<?php

use PHPUnit\Framework\TestCase;
use App\transacao\Saque;

class SaqueTest extends TestCase {
  
    public function testValorSaque() {
        $saque = new Saque(444.44, "Saque");
        $this->assertEquals(444.44, $saque->getValor());
    }

    public function testTipoSaque() {
        $saque = new Saque(456.55, "Saque");
        $this->assertEquals("Saque", $saque->getTipo());
    }
}