<?php

use covariance\AnimalFood;
use covariance\CatShelter;
use covariance\DogShelter;
use covariance\Food;

require_once __DIR__ . '/../vendor/autoload.php';

$kitty = (new CatShelter)->adopt('Ricky');
$kitty->speak();

echo PHP_EOL;

$kitty->eat(new AnimalFood);

echo PHP_EOL;

$doggy = (new DogShelter)->adopt('Rex');
$doggy->speak();

echo PHP_EOL;

$doggy->eat(new Food);
echo PHP_EOL;
