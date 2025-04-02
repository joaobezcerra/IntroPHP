<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$repository = new PdoStudentRepository($connection);

$connection->beginTransaction();
try {
    $aStudent = new Student(null, 'Teste Transaction', new DateTime('1987-10-21'));

    $repository->save($aStudent);

    $anotherStudent = new Student(null, 'Teste Transaction 222', new DateTime('1987-10-22'));

    $repository->save($anotherStudent);

    $connection->commit();
} catch (\RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}
