<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

// //Teste delete
// $repository = new PdoStudentRepository($connection);

// $student = new Student(3, 'Teste', new DateTime('1987-10-20'));

// var_dump($repository->remove($student));


// //Teste insert
// $repository = new PdoStudentRepository($connection);

// $student = new Student(null, 'Teste', new DateTime('1987-10-21'));

// var_dump($repository->save($student));


// //Teste update
// $repository = new PdoStudentRepository($connection);

// $student = new Student(3, 'Teste 42343', new DateTime('1987-10-20'));

// var_dump($repository->save($student));


// Teste All Students
$repository = new PdoStudentRepository($connection);

$students = $repository->studentsWithPhones();

var_dump($students);

// // Teste All Students Birth At
// $repository = new PdoStudentRepository($connection);

// $students = $repository->studentsBirthAt(new DateTimeImmutable('1987-10-21'));

// var_dump($students);
