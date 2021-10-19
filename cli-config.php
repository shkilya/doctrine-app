<?php

require_once __DIR__.'/vendor/autoload.php';
require_once 'bootstrap.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;

/** @var EntityManager $entityManager */
$entityManager = require __DIR__.'/entityManager.php';


return ConsoleRunner::createHelperSet($entityManager);
