<?php

namespace app\models;

use app\core\Entity;

class Schedule extends Entity{
    protected string $table = 'horario';

    public int $id;
    public string $dia;
    public string $horaInicio;
    public string $horaFin;
    public string $asignatura_id;

    public function withSubject() {
        $this->with(Subject::class, 'asignatura_id', ['withLevel']);
    }
}