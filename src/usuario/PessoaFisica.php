<?php
namespace App\usuario;

class PessoaFisica extends Usuario {

    private string $cpf;

    private string $tipoUsuario;

    public function __construct(string $nome, string $cpf) {
        parent::__construct($nome);
        $this->cpf = $cpf;
        $this->tipoUsuario = "Pessoa Física";
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }
    
    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }
}