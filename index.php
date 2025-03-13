<?php
require "vendor/autoload.php";

use App\usuario\PessoaFisica;
use App\usuario\PessoaJuridica;




$pf1 = new PessoaFisica("carlos", "12345678989");
print_r($pf1->getNome());
echo "<br>";
print_r($pf1->getCpf());
echo "<br>";

$pf1 = new PessoaJuridica("jose", "12345678989123");
print_r($pf1->getNome());
echo "<br>";
print_r($pf1->getCnpj());