<?php

declare(strict_types=1);

namespace covariance;

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}
