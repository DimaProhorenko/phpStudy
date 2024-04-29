<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

require __DIR__ . '../../utils.php';

use App\Invoice;

$invoice1 = new Invoice();
$invoice2 = new Invoice();

$invoice3 = clone $invoice1;

dump($invoice1, $invoice3, $invoice1 === $invoice3);
