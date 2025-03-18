<?php
namespace App\log;

use App\datahora\DataHora;

/**
 * A classe Logger é responsável por
 * criar logs do sistema.
 *
 * @author Carlos da Costa
 * @version 1.0
 */
class Logger
{
    /**
     * @var [type]
     */
    private $arquivoLog;


    /**
     * @var DataHora
     */
    private DataHora $dataHora;

    /**
     * O método construtor é responsável por
     * inicializar os atributos.
     *
     * @param string $arquivo
     */
    public function __construct($arquivo = "app.log")
    {
        $this->arquivoLog = $arquivo;
        $this->dataHora = new DataHora();
    }

    /**
     * Método responsável pela configuração
     * do log.
     *
     * @param mixed $mensagem
     * @param string $nivel
     */
    public function addLog($mensagem, $nivel = "INFO")
    {
        $data = $this->dataHora->getData();
        $hora = $this->dataHora->getHora();
        $logMessage = "[$data $hora] [$nivel] - $mensagem" . PHP_EOL;
        file_put_contents($this->arquivoLog, $logMessage, FILE_APPEND);
    }
}
