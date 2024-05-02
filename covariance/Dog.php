<?php

declare(strict_types=1);

namespace covariance;

class Dog extends Animal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function speak()
    {
        echo "{$this->name} barks";
    }

    public function eat(Food $food)
    {
        echo $this->name . ' eats ' . get_class($food);
    }
}
