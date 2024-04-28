<?php

namespace Core;

class Rocky implements Collectable
{
    public function collect(float $amount): float
    {
        return $amount * 0.65;
    }
}
