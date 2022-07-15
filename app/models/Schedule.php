<?php

namespace app\models;

use app\core\Entity;

class Student extends Entity {
    protected string $table = "horario";

    public int $id;
    public string $dia;
    public string $horaInicio;
    public string $horaFin;
    public int $asignatura_id;

    public function withAsignature() {
        $this->with(Asignature::class, 'asignatura_id');
    }
}