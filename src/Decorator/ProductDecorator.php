<?php

namespace DesignPatterns\Decorator;

use DesignPatterns\Shared\Domain\Product\Guitar;

class ProductDecorator implements Response
{
    private $content;
    private $product;

    public function __construct(Response $response)
    {
        $this->content = $response->content();
        $this->product = new Guitar();
    }

    /**
     * @return array
     */
    public function content()
    {
        $this->content['product'] = $this->product;

        return $this->content;
    }
}
