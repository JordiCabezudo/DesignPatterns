<?php

namespace DesignPatterns\Factory;

class Guitar implements Product
{
    public function productType()
    {
        return 'I\'m a Guitar';
    }
}