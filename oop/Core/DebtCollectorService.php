<?php

namespace Core;

class DebtCollectorService
{
    public function collectDebt(Collectable $collector)
    {
        $amount = mt_rand(100, 1000);
        $collected = $collector->collect($amount);
        echo "Collected: $ {$collected}";
    }
}
