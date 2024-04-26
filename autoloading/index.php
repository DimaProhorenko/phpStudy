<?php
// require_once __DIR__ . '/app/Stripe/Stripe.php';
// require_once __DIR__ . '/app/Paddle/Paddle.php';

// spl_autoload_register(function ($class) {
//     $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
//     if (file_exists($path)) {
//         require $path;
//     }
// });

require __DIR__ . '/../vendor/autoload.php';

use app\Stripe\Stripe;
use app\Paddle\Paddle;


// $s = new Stripe();
// $p = new Paddle();

$id = new \Ramsey\Uuid\UuidFactory();
// var_dump(get_class_methods($id));
