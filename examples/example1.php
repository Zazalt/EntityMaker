<?php

$EntityMaker = new Zazalt\EntityMaker\EntityMaker();
$EntityMaker
    ->setEngine(Zazalt\Omen\Omen::ENGINE_POSTGRESQL)    // 'postgresql'
    ->setUsername('your_username')                      // If not set, default is 127.0.0.1
    ->setPassword('your_password')                      // If not set, default is 5432 (PostgreSQL default port)
    ->setDatabase('your_database_name')
    ->setNamespace('Entity')
    ->setExtends('\YourNamespace\YouClass')
    //->setConstructInject('$config')
    ->exportTo(dirname(__FILE__) . '/Entity')
    ->run();