<?php

namespace DesignPatterns\Factory;

class Trumpet implements Product
{
    public function productType()
    {
        return 'I\'m a Trumpet';
    }
}