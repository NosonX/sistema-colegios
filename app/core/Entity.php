<?php

namespace app\core;

use PDO;
use ReflectionClass;
use ReflectionProperty;
use app\core\Database;


abstract class Entity {
    protected string $table;

    public static function getTableName(): string
    {
        $class = get_called_class();
        $entity = new $class();
        return $entity->table;
    }

    public static function getColumns(): array
    {
        $class = get_called_class();
        $reflected = new ReflectionClass(new $class());
        $properties = $reflected->getProperties(\ReflectionProperty::IS_PUBLIC);
        $columns = [];
        foreach ($properties as $property) {
            $columns[] = $property->getName();
        }
        return $columns;
    }

    public static function resultToEntity($result): Entity
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
        $table = self::getTableName();
        $results = Database::where($table, $query);
        return self::resultsToEntities($results);
    }

    public static function find($id) {
        $query = 'id='.$id;
        $results = self::where($query);

        if (count($results) > 0) {
            return $results[0];
        }

        return null;
    }

    public function getProperties(): array
    {
        $properties = call_user_func('get_object_vars', $this);
        $columns = self::getColumns();
        $params = [];
        foreach ($columns as $column) {
            $params[$column] = $properties[$column] ?? null;
        }
        return $params;
    }

    public function save() {
        $table = self::getTableName();
        $properties = $this->getProperties();
        if (isset($this->id)) {
            return Database::update($table, $this->id, $properties);
        }
        return Database::create($table, $properties);
    }
}