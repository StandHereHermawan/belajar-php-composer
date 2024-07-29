<?php

require_once __DIR__ . "/vendor/autoload.php";

use AriefWorks\Data\People;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

# 4-hello-world
echo "Hello World PHP Composer!" . PHP_EOL;

# 5-autoload
$people = new People("Terry");
echo $people->sayHello("Andrew") . PHP_EOL;

# 7-menambah-dependency
$log = new Logger("AriefWorks");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello World");
$log->info("Selamat belajar Composer.");
$log->info("object of class People with field value " . $people->getName());
$log->info($people->sayHello("Andrew") . PHP_EOL);
