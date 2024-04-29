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
use App\Exceptions\InvoiceException;


$customer = new Customer();
$invoice = new Invoice($customer);

try {
    $invoice->process(-225);
} catch (InvoiceException $e) {
    echo "{$e->getMessage()}, {$e->getFile()}:{$e->getLine()}\n";
}
