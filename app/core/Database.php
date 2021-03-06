<?php

namespace app\core;

use PDO;

class Database {
    public static function getConnection(): PDO
    {
        $driver = $_ENV['DB_DRIVER'];
        $host = $_ENV['DB_HOST'];
        $name = $_ENV['DB_NAME'];
        $port = $_ENV['DB_PORT'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        return new PDO(
            $driver.':host='.$host.';dbname='.$name.';port='.$port,
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public static function getAll($table): array {
        $db = self::getConnection();
        $sql = 'SELECT * FROM ' . $table;
        $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        $db = null;
        return $results;
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
        $result = $statement->execute($properties);
        $db = null; // PDO close connection
        return $result;
    }

    public static function delete($table, $id) {
        $db = self::getConnection();
        $sql = 'DELETE FROM '.$table.' WHERE id='.$id;
        $statement = $db->prepare($sql);
        $result = $statement->execute();
        $db = null; // PDO close connection
        return $result;
    }
}