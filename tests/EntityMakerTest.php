<?php

namespace Zazalt\EntityMaker\Tests;

class EntityMakerTest extends \Zazalt\EntityMaker\Tests\ZazaltTest
{
    protected $that;

    public function __construct()
    {
        parent::loader($this);
    }

    public function testFake()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }
}