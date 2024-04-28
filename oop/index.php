<?php

// use Core\DebtCollector;

// require_once __DIR__ . '/../vendor/autoload.php';

use Core\DebtCollector;
use Core\DebtCollectorService;
use Core\Rocky;

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$collector = new DebtCollector();
$rocky = new Rocky();
$collectorService = new DebtCollectorService();
$collectorService->collectDebt($rocky);
