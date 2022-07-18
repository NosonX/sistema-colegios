<?php

namespace app\models;

use app\core\Entity;

class Teacher extends Entity {
    protected string $table = 'profesor';

    public int $id;
    public string $login;
    public string $clave;
    public string $nombre;
    public string $apellidos;
    public string $email;
    public int $especialista;
}