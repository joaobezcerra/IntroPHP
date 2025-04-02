<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        // $dataBasePath = __DIR__ . '/../../../banco.sqlite';
        // $connection =  new PDO('sqlite:' . $dataBasePath);
        $connection = new PDO(
            'mysql:host=192.168.0.20;dbname=phppdo',
            'admin',
            '123456'
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
