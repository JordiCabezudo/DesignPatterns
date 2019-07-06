<?php

namespace DesignPatterns\Adapter;

use DesignPatterns\Shared\Domain\Product\Piano;
use Exception;
use Ramsey\Uuid\UuidInterface;

class CreateProduct
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param UuidInterface $id
     *
     * @throws Exception
     */
    public function execute($id)
    {
        $product = $this->productRepository->findById($id);

        if (!$product) {
            $product = new Piano($id);
        }

        return $this->productRepository->save($product);
    }
}
