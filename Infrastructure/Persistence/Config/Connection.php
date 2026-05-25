<?php

namespace Infrastructure\Persistence\Config;

use PDO;
use PDOException;

class Connection
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {

            $host = "localhost";
            $dbname = "crud_usuarios";
            $user = "root";
            $password = "";

            try {

                self::$connection = new PDO(
                    "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
                    $user,
                    $password
                );

                self::$connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );

                self::$connection->setAttribute(
                    PDO::ATTR_DEFAULT_FETCH_MODE,
                    PDO::FETCH_ASSOC
                );

            } catch (PDOException $e) {

                die(
                    "Error de conexión: " .
                    $e->getMessage()
                );
            }
        }

        return self::$connection;
    }
}