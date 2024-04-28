<?php

namespace Core;

interface Collectable
{
    public function collect(float $amount): float;
}
