<?php

namespace Core;

require __DIR__ . '/Collectable.php';

class DebtCollector implements Collectable
{
    public function collect(float $amount): float
    {
        $guarantee = $amount * 0.5;
        return mt_rand($guarantee, $amount);
    }
}
