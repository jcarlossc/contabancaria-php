<?php
require "vendor/autoload.php";

use App\usuario\PessoaFisica;
use App\usuario\PessoaJuridica;
use App\conta\ContaCorrente;
use App\conta\ContaPoupanca;
use App\extrato\Extrato;

$pessoaFisica1 = new PessoaFisica("carlos", "12345678989");
$contaCorrente1 = new ContaCorrente($pessoaFisica1); 
$contaCorrente1->depositar(5000.00);
$contaCorrente1->sacar(1440.00);

$pessoaJuridica1 = new PessoaJuridica("jose", "12345678989123");
$contaCorrente2 = new ContaCorrente($pessoaJuridica1); 
$contaCorrente2->depositar(4400.00);
$contaCorrente2->sacar(1000.00);
$contaCorrente2->transferir($contaCorrente1, 500.00);

$contaCorrente1->transferir($contaCorrente2, 1000.00);

$pessoaFisica2 = new PessoaFisica("Maria Teresa", "98765432144");
$contaPoupanca1 = new ContaPoupanca($pessoaFisica2);
$contaPoupanca1->depositar(7600.00);
$contaPoupanca1->sacar(3000.00);
$contaPoupanca1->transferir($contaCorrente2, 1000.00);

$pessoaJuridica2 = new PessoaJuridica("Soares da Cosra", "12365478932145");
$contaPoupanca2 = new ContaPoupanca($pessoaJuridica2);
$contaPoupanca2->depositar(9250.00);
$contaPoupanca2->sacar(2500.00);

$extrato1 = new Extrato();
$extrato1->getExtrato($contaCorrente1);
$extrato2 = new Extrato();
$extrato2->getExtrato($contaCorrente2);
$extrato3 = new Extrato();
$extrato3->getExtrato($contaPoupanca1);
$extrato4 = new Extrato();
$extrato4->getExtrato($contaPoupanca2);
