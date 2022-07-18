<?php

namespace app\models;

use app\core\Entity;

class Subject extends Entity{
    protected string $table = 'asignatura';

    public int $id;
    public string $nombre;
    public string $nivel_id;
    public string $profesor_id;

    public function withLevel() {
        $this->with(Level::class, 'nivel_id');
    }

    public function withTeacher() {
        $this->with(Teacher::class, 'profesor_id');
    }
}