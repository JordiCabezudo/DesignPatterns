<?php

namespace DesignPatterns\Singleton\Test;

use DesignPatterns\Singleton\Database;
use PHPUnit_Framework_TestCase;

class SingletonTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_database_instance_from_singleton()
    {
        $this->assertInstanceOf(
            Database::class,
            Database::getInstance()
        );
    }

    /** @test */
    public function it_should_return_same_instance_from_singleton()
    {
        $databaseInstance = Database::getInstance();
        $this->assertInstanceOf(
            Database::class,
            $databaseInstance
        );

        $this->assertSame($databaseInstance, Database::getInstance());
        $this->assertEquals(1, $databaseInstance::getInstanceCreated());
    }
}