<?php

namespace DesignPatterns\Factory;

use DesignPatterns\Shared\Domain\Product\Guitar;
use DesignPatterns\Shared\Domain\Product\Piano;
use DesignPatterns\Shared\Domain\Product\Trumpet;
use InvalidArgumentException;

class ProductFactory
{
    public static function getProductInstance($name){
        switch($name){
            case 'Guitar':
                return new Guitar();
                break;
            case 'Piano':
                return new Piano();
                break;
            case 'Trumpet':
                return new Trumpet();
                break;
            default:
                throw new InvalidArgumentException(sprintf('Invalid name: %s', $name));
                break;
        }
    }
}