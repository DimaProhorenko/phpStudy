<?php

namespace App;

use ArrayIterator;
use Traversable;

class Collection implements \IteratorAggregate
{
    public function __construct(private array $items)
    {
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
