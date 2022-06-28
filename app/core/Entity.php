<?php

namespace app\core;

use PDO;
use ReflectionClass;
use ReflectionProperty;

abstract class Entity {
    protected string $table;

    public static function getConnection(): PDO
    {
        return new PDO(
            'mysql:host=localhost;dbname=colegiosdb;port=3307',
            'root',
            'root',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public static function getTableName()
    {
        $class = get_called_class();
        $entity = new $class();
        return $entity->table;
    }

    public static function getColumns() {
        $class = get_called_class();
        $reflected = new ReflectionClass(new $class());
        $properties = $reflected->getProperties(\ReflectionProperty::IS_PUBLIC);
        $columns = [];
        foreach ($properties as $property) {
            $columns[] = $property->getName();
        }
        return $columns;
    }

    public static function resultToEntity($result)
    {
        $class = get_called_class();
        $entity = new $class();

        foreach ($result as $key => $value) {
            if (!is_int($key)) {
                $propertyType = (new ReflectionProperty($class, $key))->getType()->getName();
                $defaultValue = $propertyType === 'int' ? -1 : '';
                $entity->$key = $value ?? $defaultValue;
            }
        }

        return $entity;
    }

    public static function resultsToEntities($results): array
    {
        $entities = [];
        foreach ($results as $result) {
            $entities[] = self::resultToEntity($result);
        }
        return $entities;
    }

    public static function where($query): array
    {
        $db = self::getConnection();
        $table = self::getTableName();
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $query;
        $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        return self::resultsToEntities($results);
    }

    public static function find($id) {
        $results = self::where('id='.$id);

        if (count($results) === 1) {
            return $results[0];
        }

        return null;
    }


    public function getProperties() {
        $properties = call_user_func('get_object_vars', $this);
        $columns = self::getColumns();
        $params = [];
        foreach ($columns as $column) {
            $params[$column] = $properties[$column] ?? null;
        }
        return $params;
    }

    public function save() {
        $db = self::getConnection();
        $table = self::getTableName();
        $properties = $this->getProperties();
        if (isset($this->id)) {
            $set = [];
            foreach ($properties as $key => $value) {
                $set[] = $key.'=:'.$key;
            }
            $set = implode(', ', $set);
            $sql = 'UPDATE '.$table.' SET '.$set.' WHERE id='.$this->id;
        }
        else {
            $columns = implode(', ', array_keys($properties));
            $paramNames = ':'.implode(', :', array_keys($properties));
            $sql = 'INSERT INTO '.$table.' ('.$columns.') VALUES ('.$paramNames.')';
        }

        $statement = $db->prepare($sql);
        $result = $statement->execute($properties);
        var_dump($result);
    }
}