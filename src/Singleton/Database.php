<?php

namespace DesignPatterns\Singleton;

class Database
{
    static private $instance = null;
    static private $instanceCreated = 0;

    private function __construct()
    {
        self::$instanceCreated++;
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public static function getInstanceCreated()
    {
        return self::$instanceCreated;
    }
}
