<?php
namespace App\log;

use App\calendario\Calendario;

/**
 * A classe Logger é responsável por 
 * criar logs do sistema.
 * 
 * @author Carlos da Costa
 * @version 1.0
 */
class Logger {
    /**
     * @var [type]
     */
    private $logFile;

    /**
     * @var Calendario
     */
    private Calendario $dataHora;

    /**
     * O método construtor é responsável por 
     * inicializar os atributos.
     * 
     * @param string $file
     */
    public function __construct($file = "app.log") {
        $this->logFile = $file;
        $this->dataHora = new Calendario();
    }

    /**
     * Método responsável pela configuração
     * do log.
     * 
     * @param mixed $message
     * @param string $level
     */
    public function addLog($message, $level = "INFO") {
        $data = $this->dataHora->getData();
        $hora = $this->dataHora->getHora();
        $logMessage = "[$data $hora] [$level] - $message" . PHP_EOL;
        file_put_contents($this->logFile, $logMessage, FILE_APPEND);
    }
}