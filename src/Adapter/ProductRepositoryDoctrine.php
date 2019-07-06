<?php

namespace DesignPatterns\Adapter;

use DesignPatterns\Shared\Domain\Product;
use Ramsey\Uuid\UuidInterface;

class ProductRepositoryDoctrine implements ProductRepository
{
    /** @var UuidInterface $id */
    public function findById($id)
    {
        return null;
    }

    /** @var Product $product */
    public function save($product)
    {
        return 'Save on Doctrine repository';
    }
}
