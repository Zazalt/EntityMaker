EntityMaker
=================

[![Build Status](https://travis-ci.org/Zazalt/EntityMaker.svg?branch=master)](https://travis-ci.org/Zazalt/EntityMaker)
[![Coverage Status](https://coveralls.io/repos/github/Zazalt/EntityMaker/badge.svg?branch=master)](https://coveralls.io/github/Zazalt/EntityMaker?branch=master)
[![Code Climate](https://codeclimate.com/github/Zazalt/EntityMaker/badges/gpa.svg)](https://codeclimate.com/github/Zazalt/EntityMaker)
[![Issue Count](https://codeclimate.com/github/Zazalt/EntityMaker/badges/issue_count.svg)](https://codeclimate.com/github/Zazalt/EntityMaker/issues)
[![Total Downloads](https://poser.pugx.org/zazalt/entitymaker/downloads)](https://packagist.org/packages/zazalt/entitymaker/stats)
[![Latest Stable Version](https://poser.pugx.org/zazalt/entitymaker/v/stable)](https://packagist.org/packages/zazalt/entitymaker)
![Version](https://img.shields.io/badge/version-beta-yellow.svg)



Requirements
---------------
* php >= 5.4.0

Packagist Dependencies
---------------
* [zazalt/omen](https://github.com/zazalt/omen)
* [zazalt/databaser](https://github.com/zazalt/databaser)
* [zazalt/strink](https://github.com/zazalt/strink)
* [zazalt/system](https://github.com/zazalt/system)

Installation
---------------
With composer:
``` json
{
	"require": {
		"zazalt/entitymaker": "dev-master"
	}
}
```

## Usage
```php
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
```