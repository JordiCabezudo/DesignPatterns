<?php

namespace DesignPatterns\Adapter\Test;

use DesignPatterns\Adapter\CreateProduct;
use DesignPatterns\Adapter\ProductRepository;
use DesignPatterns\Adapter\ProductRepositoryDoctrine;
use DesignPatterns\Adapter\ProductRepositoryMysql;
use PHPUnit_Framework_TestCase;
use Ramsey\Uuid\Uuid;

class CreateProductTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @dataProvider adapterAnExpectations
     *
     * @param ProductRepository $repository
     * @param string $expected
     *
     * @throws \Exception
     */
    public function it_should_use_mysql_adapter_to_save($repository, $expected)
    {
        $createProduct = new CreateProduct($repository);
        $productId = Uuid::uuid4();

        $this->assertEquals($expected, $createProduct->execute($productId));
    }

    public function adapterAnExpectations()
    {
        return [
            'CreateProductTests use Doctrine Repository' => [
                new ProductRepositoryDoctrine(),
                'Save on Doctrine repository',
            ],
            'CreateProductTests use Mysql Repository' => [
                new ProductRepositoryMysql(),
                'Save on Mysql repository',
            ],
        ];
    }
}
