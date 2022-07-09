<?php

namespace app\core;

use ReflectionClass;
use ReflectionProperty;
use app\core\Collection;

abstract class Entity {
    protected string $table;

    protected function with($entity, $localKey) {
        $newProperty = strtolower($entity);
        $newProperty = explode('\\', $newProperty);
        $newProperty = $newProperty[count($newProperty) - 1];
        $this->{$newProperty} = $entity::find($this->$localKey);
    }

    public static function getTableName(): string {
        $class = get_called_class();
        $entity = new $class();
        return $entity->table;
    }

    public static function getColumns(): array {
        $class = get_called_class();
        $reflected = new ReflectionClass(new $class());
        $properties = $reflected->getProperties(\ReflectionProperty::IS_PUBLIC);
        $columns = [];
        foreach ($properties as $property) {
            $columns[] = $property->getName();
        }
        return $columns;
    }

    public static function resultToEntity($result): Entity {
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

    public static function resultsToEntities($results): Collection {
        $entities = new Collection();
        foreach ($results as $result) {
            $entities[] = self::resultToEntity($result);
        }
        return $entities;
    }

    public static function where($query): Collection {
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

    public static function findAll(...$relationships): Collection {
        $table = self::getTableName();
        $results = Database::getAll($table);
        $entities = self::resultsToEntities($results);
        foreach ($entities as $entity) {
            foreach ($relationships as $relationship) {
                $entity->{$relationship}();
            }
        }
        return $entities;
    }

    public static function delete($id) {
        $record = self::find($id);
        if ($record !== null) {
            $table = self::getTableName();
            Database::delete($table, $id);
        }
        return $record;
    }

    public function getProperties(): array {
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

    public function toArray() {
        return json_decode(json_encode($this), true);
    }
}