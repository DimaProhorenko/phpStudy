<?php

namespace Http;

class Transaction
{
    private static int $count = 0;

    public function __construct(private float $amount, private string $description)
    {
        self::$count++;
    }

    public function process()
    {
        echo 'Processing paddle transaction...';
    }
}
