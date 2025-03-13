<?php
namespace App\usuario;

class Usuario {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}