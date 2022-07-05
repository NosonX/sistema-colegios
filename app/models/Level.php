<?php

namespace app\models;

use app\core\Entity;

class Level extends Entity{
    protected string $table = 'nivel';

    public int $id;
    public string $nivel;
    public string $curso;
    public string $aula;
}