<?php

use Http\Transaction;
use Http\DB;

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$t = new Transaction(25.5, 'Udemy course');
$db1 = DB::getInstance([]);
$db1 = DB::getInstance([]);
$db1 = DB::getInstance([]);
$db1 = DB::getInstance([]);
