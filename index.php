<?php
require_once "vendor/autoload.php";

use App\Entity\Task;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/** @var EntityManager $entityManager */
$entityManager = require __DIR__.'/entityManager.php';


$task =  (new Task)
    ->setTitle('cxz')
    ->setAuthor('gfd');

//$entityManager->persist($task);
$repository = $entityManager->getRepository(Task::class);

var_dump($repository->findAll());
die;
//$entityManager->flush();



