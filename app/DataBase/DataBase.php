<?php

namespace App\DataBase;

use PDO;
use PDOStatement;

abstract class DataBase
{
    /**
     * @var PDO $PDO
     */
    protected static PDO $PDO;

    /**
     * Connect to database
     *
     * @return void
     */
    public static function connected()
    {
        $host ='127.0.0.1';
        $port ='3306';
        $database ='organization';
        $username ='root';
        $password ='password';
        $charset ='utf8_general_ci';
        $dsn = "mysql:host=$host;port=$port;dbname=$database;charset=$charset";

        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            static::$PDO = new PDO($dsn, $username, $password, $options);
        } catch (\PDOException $error) {
            die($error->getMessage());
        }
    }

    /**
     * Execute query
     *
     * @param string $query
     * @return PDOStatement|bool $exe
     */
    protected function exe(string $query)
    {
        $exe = static::$PDO->query($query, PDO::FETCH_OBJ);

        return $exe;
    }
}
