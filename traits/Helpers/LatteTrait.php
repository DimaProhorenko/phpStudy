<?php

namespace Helpers;

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . ' is making latte' . PHP_EOL;
    }

    public function boilWater()
    {
        echo static::class . ' is boiling water (Latte Trait)' . PHP_EOL;
    }
}
