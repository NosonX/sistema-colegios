<?php

namespace app\models;

use app\core\Entity;

class Student extends Entity {
    protected string $table = "alumno";

    public int $id;
    public string $login;
    public string $clave;
    public string $nombre;
    public string $apellidos;
}