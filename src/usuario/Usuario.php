<?php
namespace App\usuario;

/**
 * A classe abstrata Usuário é responsável por
 * centralizar as operações das classes Pessoa
 * Física e Pessoa Jurídica.
 *
 * @author Carlos da Costa
 * @version 1.0
 */
abstract class Usuario
{
    /**
     * @var string
     */
    protected string $nome;

    /**
     * O método construtor é responsável por
     * inicializar os atributos da classe.
     *
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Método que acessa o nome do usuário.
     *
     * @return string Nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Método abstrato que acessa o tipo de usuário.
     *
     * @return string tipo de usuário
     */
    abstract public function getTipoUsuario();

}
