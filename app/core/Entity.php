<?php

namespace app\core;

use PDO;
use ReflectionClass;

abstract class Entity {
    protected string $table;

    public static function getConnection(): PDO {
        return new PDO(
            'mysql:host=localhost;dbname=colegiosdb;port=3307',
            'root',
            'root',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public static function getTableName() {
        $class = get_called_class();
        $class = new $class();
        return $class->table;
    }

    public static function where($query) {
        $db = self::getConnection();
        $table = self::getTableName();
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $query;
        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        print_r($result);
    }
}