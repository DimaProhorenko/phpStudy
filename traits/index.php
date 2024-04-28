<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});


use App\CoffeeMaker;
use App\LatteMaker;
use App\CappuccinoMaker;
use App\AllCoffeeMaker;
use App\LateMaker;

$maker = new CoffeeMaker();
$maker->makeCoffee();

$latte = new LatteMaker();
$latte->makeCoffee();
$latte->makeLatte();

$cappuccino = new CappuccinoMaker();
$cappuccino->makeCoffee();
$cappuccino->makeCappuccino();

$all = new AllCoffeeMaker();
$all->makeCoffee();
$all->makeLatte();
$all->makeCappuccino();
