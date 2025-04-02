<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helpers\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idAluno = $argv[1];
$idCurso = $argv[2];

/**@var Aluno $aluno */
$aluno = $entityManager->find(Aluno::class, $idAluno);
$curso = $entityManager->find(Curso::class, $idCurso);

$aluno->addCurso($curso);

$entityManager->flush();
