<?php

namespace app\models;

use app\core\Entity;

class AdminModel extends Entity{
    protected string $table = 'administrador';

    public int $id;
    public string $login;
    public string $clave;
    public string $email;
}