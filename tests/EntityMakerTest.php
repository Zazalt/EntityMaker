<?php

namespace Zazalt\EntityMaker\Tests;

class EntityMakerTest extends \PHPUnit_Framework_TestCase
{
    private $that;

    public function setUp()
    {
        $testedClassName    = str_replace('Test', '', substr(strrchr(__CLASS__, "\\"), 1));
        $testedClassPath    = 'Zazalt\\'.$testedClassName .'\\'. $testedClassName;
        require_once getcwd() . '/src/'. $testedClassName .'.php';
        $this->that = new $testedClassPath();
    }

    public function testFake()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }
}