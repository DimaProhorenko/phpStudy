<?php

use Http\Invoice;

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});


$invoice = new Invoice();

// var_dump(isset($invoice->header));

$invoice->header = 'Hello';
$invoice->id = 324430985;


// unset($invoice->header);

// var_dump(isset($invoice->header));
// echo $invoice->id;

// var_dump($invoice);

// $invoice->process(24.4, 'For school');
echo $invoice;
