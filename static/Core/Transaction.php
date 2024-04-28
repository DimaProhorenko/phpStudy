<?php

namespace static\Core;

class Transaction
{

    public static int $count = 0;

    public function __construct(public string $amount, public string $description)
    {
    }

    public function process()
    {
        echo 'Processing paddle transaction...';
    }
}
