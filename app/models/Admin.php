<?php

namespace app\models;

use app\core\Entity;

class Admin extends Entity{
    protected string $table = 'administrador';

    public int $id;
    public string $login;
    public string $clave;
    public string $email;
}