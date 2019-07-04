<?php

namespace DesignPatterns\Factory;

class Piano implements Product
{
    public function productType()
    {
        return 'I\'m a Piano';
    }
}
