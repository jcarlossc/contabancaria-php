<?php
namespace App\datahora;

use DateTime;
use DateTimeZone;

/**
 * A classe DataHora é responsável por
 * gerar data e hora para o sistema.
 *
 * @author Carlos da Costa
 * @version 1.0
 */
class DataHora
{
    /**
     * @var DateTime
     */
    private DateTime $dataHora;

    /**
     * Método construtor.
     *
     * @param string $data
     * @param string $fusoHorario
     */
    public function __construct(string $data = "now", string $fusoHorario = "America/Recife")
    {
        $this->dataHora = new DateTime($data, new DateTimeZone($fusoHorario));
    }

    /**
     * Método responsável por gerar
     * data para o sistema.
     *
     * @return string data.
     */
    public function getData(): string
    {
        return $this->dataHora->format("d/m/Y");
    }

    /**
     * Método responsável por gerar
     * horário para o sistema.
     *
     * @return string
     */
    public function getHora(): string
    {
        return $this->dataHora->format("H:i:s");
    }
}
