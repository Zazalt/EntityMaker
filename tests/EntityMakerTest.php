<?php

namespace Zazalt\EntityMaker\Tests;

use Zazalt\EntityMaker\EntityMaker;

class EntityMakerTest extends \Zazalt\EntityMaker\Tests\ZazaltTest
{
    protected $that;

    public function __construct()
    {
        parent::loader(EntityMaker::class);
    }

    public function testFake()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }
}