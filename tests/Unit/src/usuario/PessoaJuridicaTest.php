<?php

use PHPUnit\Framework\TestCase;
use App\usuario\PessoaJuridica;

class PessoaJuridicaTest extends TestCase {
  
    public function testNomePessoaJuridica() {
        $pessoaFisica = new PessoaJuridica("Maria Teresa", "12345678989123");
        $this->assertEquals("Maria Teresa", $pessoaFisica->getNome());
    }

    public function testCpfPessoaJuridica() {
        $pessoaFisica = new PessoaJuridica("carlos", "12345678989123");
        $this->assertEquals("12345678989123", $pessoaFisica->getCnpj());
    }

    public function testTipoUsuarioPessoaJuridica() {
        $pessoaFisica = new PessoaJuridica("Maria Teresa", "12345678989123");
        $this->assertEquals("Pessoa Jurídica", $pessoaFisica->getTipoUsuario());
    }
}