<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helpers\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

// $alunoRepository = $entityManager->getRepository(Aluno::class);

// $alunoList = $alunoRepository->findAll();

// $dql = "SELECT aluno FROM Alura\\Doctrine\Entity\Aluno aluno WHERE aluno.id=1 OR aluno.nome = 'Nico Steppat'";

$dql = "SELECT aluno FROM Alura\\Doctrine\Entity\Aluno aluno WHERE aluno.id=1";

$query = $entityManager->createQuery($dql);
$alunoList = $query->getResult();

foreach ($alunoList as $aluno) {
    $telefones = $aluno->getTelefones()
                        ->map(function (Telefone $telefone) {
                            return $telefone->getNumero();
                        })
                        ->toArray();
    echo "ID: {$aluno->getId()} \nNome: {$aluno->getNome()}\n";
    echo "Telefones" . implode(", ", $telefones) . "\n\n";
}

// $ricardo = $alunoRepository->find(1);
// echo "Nome: {$ricardo->getNome()}\n\n";

// $ana = $alunoRepository->findBy([
//     "nome" => "Ana Teresa"
// ]);

// var_dump($ana);

// $tatiele = $alunoRepository->findOneBy([
//     "nome" => "Tatiele"
// ]);

// var_dump($tatiele);
