<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helpers\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$debugStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);

/** @var Aluno[] $alunos */
$alunos = $alunoRepository->findAll();

foreach ($alunos as $aluno) {
    $telefones = $aluno->getTelefones()
                        ->map(function (Telefone $telefone) {
                            return $telefone->getNumero();
                        })
                        ->toArray();
    echo "ID: {$aluno->getId()} \nNome: {$aluno->getNome()}\n";
    echo "Telefones " . implode(", ", $telefones) . "\n";

    $cursos = $aluno->getCursos();

    foreach ($cursos as $curso) {
        echo "\tCurso: {$curso->getNome()}\n";
    }

    echo "\n\n";
}

// print_r($debugStack);

echo "\n";
foreach ($debugStack->queries as $queryInfo) {
    echo $queryInfo['sql'] . "\n";

}
