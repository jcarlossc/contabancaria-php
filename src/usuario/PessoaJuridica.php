<?php
namespace App\usuario;

/**
 * A classe Pessoa Jurídica é responsável por 
 * criar uma instância de Pessoa Jurídica no sistema.
 */
class PessoaJuridica extends Usuario {

    /**
     * @var string
     */
    private string $cnpj;

    /**
     * @var string
     */
    private string $tipoUsuario;

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     * 
     * @param string $nome
     * @param string $cnpj
     */
    public function __construct(string $nome, string $cnpj) {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
        $this->tipoUsuario = "Pessoa Jurídica";
    }

    /**
     * Método que acessa o nome da pessoa Jurídica.
     * 
     * @return string nome
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Método que acessa o cnpj da Pessoa Física.
     * 
     * @return string cnpj
     */
    public function getCnpj() {
        return $this->cnpj;
    }
    
    /**
     * Método que acessa o tipo de usuário.
     * 
     * @return string tipo de usuário.
     */
    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }
}