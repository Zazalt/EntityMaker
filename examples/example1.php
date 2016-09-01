<?php

$EntityMaker = new Zazalt\EntityMaker\EntityMaker();
$EntityMaker
    ->setEngine(Zazalt\Databaser\Databaser::ENGINE_POSTGRESQL)
    //->setHost('127.0.0.1')                        // If not set, default is 127.0.0.1
    //->setPort()                                   // If not set, default is 5432 (PostgreSQL default port)
    ->setUsername('your_username')
    ->setPassword('your_password')
    ->setDatabase('your_database_name')
    ->setNamespace('Entities')
    ->setExtends('\YourNamespace\YouClass')         // Optional
    ->exportTo(dirname(__FILE__).'/Entities')
    ->run();