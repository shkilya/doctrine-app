<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

return (static  function():EntityManager {
    $paths = ["src/Entity"];
    $isDevMode = true;


    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    $config->setMetadataDriverImpl(new \Doctrine\ORM\Mapping\Driver\AttributeDriver($paths));

    $connectionParams = [
        'url' => 'postgres://developer:password@localhost:5810/project',
    ];
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);


    return EntityManager::create($conn, $config);
})();