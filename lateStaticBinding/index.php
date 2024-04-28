<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});


$a = new A();
$b = new B();

echo A::getValue() . PHP_EOL;
echo B::getValue();
