<?php

declare(strict_types=1);

namespace covariance;

class Cat extends Animal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function speak()
    {
        echo "{$this->name} meows";
    }
}
