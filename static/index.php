<?php


use static\Core\Transaction;

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    echo $path;
    if (file_exists($path)) {
        require $path;
    }
});

$t = new Transaction('12', 'FUUUCK');
