<?php
namespace App\calendario;

use DateTime;
use DateTimeZone;

class Calendario {
    private DateTime $dataHora;

    public function __construct(string $data = "now", string $fusoHorario = "America/Recife") {
        $this->dataHora = new DateTime($data, new DateTimeZone($fusoHorario));
    }    

    public function getData(): string {
        return $this->dataHora->format("d/m/Y");
    }

    public function getHora(): string {
        return $this->dataHora->format("H:i:s");
    }
}
