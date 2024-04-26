<?php
// require_once __DIR__ . '/app/Stripe/Stripe.php';
// require_once __DIR__ . '/app/Paddle/Paddle.php';

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $path;
});

use app\Stripe\Stripe;
use app\Paddle\Paddle;


$s = new Stripe();
$p = new Paddle();
