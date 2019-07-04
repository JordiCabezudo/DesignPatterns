<?php

namespace DesignPatterns\Factory;

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