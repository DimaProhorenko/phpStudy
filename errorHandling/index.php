<?php

require __DIR__ . '/../utils.php';
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

use App\Invoice;
use App\Customer;


$customer = new Customer();
$invoice = new Invoice($customer);

$invoice->process(225);
