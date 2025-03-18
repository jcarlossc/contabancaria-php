<?php
namespace App\usuario;

/**
 * A classe Pessoa Física é responsável por
 * criar uma instância de Pessoa Física no sistema.
 *
 * @author Carlos da Costa
 * @version 1.0
 */
class PessoaFisica extends Usuario
{

    /**
     * @var string
     */
    private string $cpf;

    /**
     * @var string
     */
    private string $tipoUsuario;

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     *
     * @param string $nome
     * @param string $cpf
     */
    public function __construct(string $nome, string $cpf)
    {
        parent::__construct($nome);
        $this->cpf = $cpf;
        $this->tipoUsuario = "Pessoa Física";
    }

    /**
     * Método que acessa o nome da pessoa Física.
     *
     * @return string nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Método que acessa o cpf da pessoa Física.
     *
     * @return string cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }
    
    /**
     * Método que acessa o tipo de usuário.
     *
     * @return string tipo de usuário.
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }
}
