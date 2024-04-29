<?php

use App\Invoice;
use App\InvoiceCollection;

require __DIR__ . '../../utils.php';

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$collection = new InvoiceCollection([new Invoice(25), new Invoice(96), new Invoice(2934), new Invoice(1_000_000)]);


foreach ($collection as $invoice) {
    echo $invoice . '</br>';
}
