<?php

namespace DesignPatterns\Adapter;

use DesignPatterns\Shared\Domain\Product;
use Ramsey\Uuid\UuidInterface;

interface ProductRepository
{
    /** @var UuidInterface $id */
    public function findById($id);

    /** @var Product $product */
    public function save($product);
}