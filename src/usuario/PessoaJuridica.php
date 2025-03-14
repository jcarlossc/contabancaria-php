<?php
namespace App\usuario;

class PessoaJuridica extends Usuario {

    private string $cnpj;

    private string $tipoUsuario;

    public function __construct(string $nome, string $cnpj) {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
        $this->tipoUsuario = "Pessoa Jurídica";
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }
    
    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }
}