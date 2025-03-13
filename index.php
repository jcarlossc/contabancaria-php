<?php
require "vendor/autoload.php";

use App\usuario\PessoaFisica;
use App\usuario\PessoaJuridica;
use App\conta\ContaCorrente;




$pf1 = new PessoaFisica("carlos", "12345678989");
print_r($pf1->getNome());
echo "<br>";
print_r($pf1->getCpf());
echo "<br>";
$pj1 = new PessoaJuridica("jose", "12345678989123");
print_r($pj1->getNome());
echo "<br>";
print_r($pj1->getCnpj());

$cc1 = new ContaCorrente($pf1); 
$cc2 = new ContaCorrente($pj1); 
echo "<br>";
$cc1->depositar(500.00);
echo 'Saldo da conta $cc1: ' . $cc1->getSaldo();
$cc1->sacar(100.00);
echo "<br>";
echo 'Saldo da conta $cc1: ' . $cc1->getSaldo();
echo "<br>";
$cc1->transferir($cc2, 100.00);
echo "<br>";
echo 'Saldo da conta $cc1: ' . $cc1->getSaldo();
echo "<br>";
echo 'Saldo da conta $cc2: ' . $cc2->getSaldo();
echo "<br>";

$cc2->depositar(500.00);
echo 'Saldo da conta $cc2: ' . $cc2->getSaldo();
$cc2->sacar(100.00);
echo "<br>";
echo 'Saldo da conta $cc2: ' . $cc2->getSaldo();
$cc2->transferir($cc1, 100.00);

echo "<br>";
echo "<br>";
echo 'Saldo da conta $cc1: ' . $cc1->getSaldo();
echo "<br>";
echo 'Saldo da conta $cc2: ' . $cc2->getSaldo();