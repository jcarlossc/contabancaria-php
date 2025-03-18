<?php

use PHPUnit\Framework\TestCase;
use App\usuario\PessoaFisica;

class PessoaFisicaTest extends TestCase {

    public function testNomePessoaFisica() {
        $pessoaFisica = new PessoaFisica("carlos", "12345678989");
        $this->assertEquals("carlos", $pessoaFisica->getNome());
    }

    public function testCpfPessoaFisica() {
        $pessoaFisica = new PessoaFisica("carlos", "12345678989");
        $this->assertEquals("12345678989", $pessoaFisica->getCpf());
    }

    public function testTipoUsuarioPessoaFisica() {
        $pessoaFisica = new PessoaFisica("carlos", "12345678989");
        $this->assertEquals("Pessoa Física", $pessoaFisica->getTipoUsuario());
    }
  
}