<?php

namespace Http;

class DB
{
    private static ?DB $instance = null;

    private function __construct(private array $config)
    {
        echo 'Instance created';
    }

    public static function getInstance(array $config): DB
    {
        if (self::$instance === null) {
            self::$instance = new DB($config);
        }

        return self::$instance;
    }
}
