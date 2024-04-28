<?php

namespace Helpers;

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }

    public function boilWater()
    {
        echo static::class . ' is boiling water (Cappuccino Trait)' . PHP_EOL;
    }
}
