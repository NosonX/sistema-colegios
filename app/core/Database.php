<?php

namespace app\core;

use PDO;

class Database {
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

    public static function where($table, $query): array
    {
        $db = self::getConnection();
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $query;
        $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        $db = null; // PDO close connection
        return $results;
    }

    public static function create($table, $properties): int
    {
        $db = self::getConnection();
        $columns = implode(', ', array_keys($properties));
        $paramNames = ':'.implode(', :', array_keys($properties));
        $sql = 'INSERT INTO '.$table.' ('.$columns.') VALUES ('.$paramNames.')';
        $statement = $db->prepare($sql);
        $statement->execute($properties);
        $id = $db->lastInsertId();
        $db = null; // PDO close connection
        return $id;
    }

    public static function update($table, $id, $properties): bool
    {
        $db = self::getConnection();
        $set = [];
        foreach ($properties as $key => $value) {
            $set[] = $key.'=:'.$key;
        }
        $set = implode(', ', $set);
        $sql = 'UPDATE '.$table.' SET '.$set.' WHERE id='.$id;
        $statement = $db->prepare($sql);
        $db = null; // PDO close connection
        return $statement->execute($properties);
    }

    public static function delete($table, $id) {
        $db = self::getConnection();
        $sql = 'DELETE FROM '.$table.' WHERE id='.$id;
        $statement = $db->prepare($sql);
        return $statement->execute();
    }
}