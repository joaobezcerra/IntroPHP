<?php

namespace Alura\Doctrine\Helpers;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'],
            true
        );
        // $connection = [
        //     'driver' => 'pdo_sqlite',
        //     'path' => $rootDir . '/var/data/banco.sqlite'
        // ];
        $connection = [
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'curso_doctrine',
            'user' => 'root',
            'password' => 'root'
        ];
        return EntityManager::create($connection, $config);
    }
}
