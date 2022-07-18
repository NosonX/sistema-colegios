<?php

namespace app\models;

use app\core\Entity;
use app\models\Level;

class Student extends Entity {
    protected string $table = "alumno";

    public int $id;
    public string $login;
    public string $clave;
    public string $nombre;
    public string $apellidos;
    public int $nivel_id;

    public function withLevel() {
        $this->with(Level::class, 'nivel_id');
    }
}