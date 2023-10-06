<?php

namespace Config{
    class Database{

        static function getConnection(): \PDO
        {
            $host = "localhost";
            $port = "3306";
            $database = "db_todolist";
            $username = "root";
            $password = "";

            return new \PDO("mysql:host=$host:$port;dbnames=$database", $username, $password);
        }
    }
}