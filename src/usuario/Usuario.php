<?php
namespace App\usuario;

abstract class Usuario {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    abstract public function getTipoUsuario();

}