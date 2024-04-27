<?php

use Core\Transaction;
use Core\Status;

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($path)) {
        require $path;
    }
});

$t = new Transaction();
$t->setStatus(Status::DECLINED);
var_dump($t);
