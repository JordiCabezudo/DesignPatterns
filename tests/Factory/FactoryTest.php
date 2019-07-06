<?php

namespace DesignPatterns\Factory\Test;

use DesignPatterns\Factory\ProductFactory;
use DesignPatterns\Shared\Domain\Product\Guitar;
use DesignPatterns\Shared\Domain\Product\Piano;
use DesignPatterns\Shared\Domain\Product\Trumpet;
use http\Exception\InvalidArgumentException;
use PHPUnit_Framework_TestCase;

class FactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @dataProvider objectNames
     * @param string $expectedClass
     * @param string $objectName
     */
    public function it_should_return_object_from_factory($expectedClass, $objectName)
    {
        $this->assertInstanceOf(
            $expectedClass,
            ProductFactory::getProductInstance($objectName)
        );
    }

    public function objectNames()
    {
        return [
            'FactoryTest getGuitarInstance' => [Guitar::class, 'Guitar',],
            'FactoryTest getPianoInstance' => [Piano::class, 'Piano',],
            'FactoryTest getTrumpetInstance' => [Trumpet::class, 'Trumpet'],
        ];
    }

    public function it_should_throw_invalid_argument_exception_when_object_name_not_mapped()
    {
        $this->expectException(InvalidArgumentException::class);

        ProductFactory::getProductInstance('notMappedProduct');
    }
}